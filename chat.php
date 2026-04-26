<?php
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['error' => 'Method not allowed']));
}

$config_path = __DIR__ . '/includes/chat_config.php';
if (!file_exists($config_path)) {
    http_response_code(503);
    exit(json_encode(['error' => 'Chat not configured']));
}
require_once $config_path;

if (!defined('CLAUDE_API_KEY') || CLAUDE_API_KEY === 'YOUR_CLAUDE_API_KEY_HERE') {
    http_response_code(503);
    exit(json_encode(['error' => 'Chat is not yet configured.', 'code' => 'unconfigured']));
}

$input = json_decode(file_get_contents('php://input'), true);
if (!is_array($input) || empty($input['messages'])) {
    http_response_code(400);
    exit(json_encode(['error' => 'Invalid request']));
}

$messages = [];
foreach ($input['messages'] as $msg) {
    if (!isset($msg['role'], $msg['content'])) continue;
    if (!in_array($msg['role'], ['user', 'assistant'])) continue;
    $messages[] = [
        'role'    => $msg['role'],
        'content' => mb_substr(trim((string)$msg['content']), 0, 2000),
    ];
}

if (empty($messages)) {
    http_response_code(400);
    exit(json_encode(['error' => 'No valid messages']));
}

// Keep last 20 turns to control cost and stay within context
if (count($messages) > 20) {
    $messages = array_slice($messages, -20);
}

$system = <<<'SYS'
You are a friendly and professional AI assistant for Xpansion Technologies, a Sydney-based IT and AI solutions company with 12+ years of experience. Help website visitors understand our services and products, and guide them to the right next step.

COMPANY
- Name: Xpansion Technologies
- Location: Sussex Street, Sydney, NSW 2000, Australia
- Email: info@xpansion.com.au
- Focus: IT engineering, AI automation, cloud, managed security, digital transformation

SERVICES
1. Digital Engineering & Applications — custom software, web/mobile apps, system integration
2. Managed IT & Security — 24/7 SOC, SIEM, threat detection, IT support
3. AI & Intelligent Automation — AI workflows, process automation, intelligent business systems
4. Data & Business Intelligence — analytics platforms, executive dashboards, predictive analytics
5. Cloud Services — cloud migration, managed cloud operations, DevOps

INDUSTRY SOLUTIONS
- Telecom Services (OSS/BSS integration, order management)
- Talent Acquisition Solutions
- Education Services
- Smart City & Surveillance (ANPR, computer vision, command dashboards)

PRODUCTS (ready-to-deploy platforms)
- XIMS — Invoice Management System (xims.com.au) — quotes, invoices, CRM, payment tracking
- XT-VMS — Visitor Management System — paperless check-in, multi-site, real-time analytics
- Foodways — Food supply chain management
- Salon Management System — bookings, staff, inventory
- xEvent — Event planning and publishing platform (xevent.com.au)
- XHRMS — Human Resource Management System — payroll, onboarding, leave
- Sports Academy Management System — scheduling, memberships, billing

RESPONSE RULES
- Keep replies to 2–4 sentences unless the question genuinely needs detail
- Be helpful and direct, not salesy
- For pricing or project scoping, direct users to info@xpansion.com.au or the Contact Us page
- If you don't know something specific, say so and offer to connect them with the team
- Never invent pricing figures or guarantee outcomes
SYS;

// OpenRouter uses OpenAI-compatible format: system goes as first message
$or_messages = array_merge(
    [['role' => 'system', 'content' => $system]],
    $messages
);

$payload = json_encode([
    'model'      => 'anthropic/claude-haiku-4-5',
    'max_tokens' => 600,
    'messages'   => $or_messages,
]);

$ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . CLAUDE_API_KEY,
        'HTTP-Referer: https://xpansion.com.au',
        'X-Title: Xpansion Technologies',
    ],
    CURLOPT_POSTFIELDS => $payload,
]);

$response   = curl_exec($ch);
$http_code  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch);

if ($curl_error) {
    http_response_code(503);
    exit(json_encode(['error' => 'Connection error. Please try again.', 'code' => 'curl_error', 'detail' => $curl_error]));
}

if ($http_code !== 200) {
    $api_body = json_decode($response, true);
    http_response_code(502);
    exit(json_encode(['error' => 'AI service temporarily unavailable.', 'code' => 'api_error', 'status' => $http_code, 'detail' => $api_body['error']['message'] ?? $response]));
}

// OpenRouter returns OpenAI-compatible format: choices[0].message.content
$data  = json_decode($response, true);
$reply = $data['choices'][0]['message']['content'] ?? null;

if (!$reply) {
    http_response_code(500);
    exit(json_encode(['error' => 'Empty response from AI.']));
}

echo json_encode(['reply' => $reply]);
