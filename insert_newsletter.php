<?php
header('Content-Type: application/json');

include('includes/db_con.php');

$response = [
    "success" => false,
    "message" => ""
];

// Only POST allowed
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $response["message"] = "Invalid request.";
    echo json_encode($response);
    exit;
}

// Email get
$email = isset($_POST['email']) ? trim($_POST['email']) : "";

// Validation
if ($email == "") {
    $response["message"] = "Email is required.";
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response["message"] = "Please enter a valid email address.";
    echo json_encode($response);
    exit;
}

// Check duplicate
$check = $con->prepare("SELECT id FROM tbl_subscription WHERE email=?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    $response["message"] = "This email is already subscribed.";
    echo json_encode($response);
    exit;
}

// Insert email
$stmt = $con->prepare("INSERT INTO tbl_subscription (email, created_at) VALUES (?, NOW())");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    $response["success"] = true;
    $response["message"] = "Subscription successful! Thank you for joining us.";
} else {
    $response["message"] = "Database error. Please try again.";
}

echo json_encode($response);
exit;