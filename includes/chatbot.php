<style>
#xt-chat-widget {
  --xc-primary:      #086ad8;
  --xc-primary-dk:   #0552a8;
  --xc-bot-bubble:   #f0f4f8;
  --xc-text:         #1a1a2e;
  --xc-muted:        #6b7280;
  --xc-shadow:       0 8px 40px rgba(8,106,216,.20), 0 2px 8px rgba(0,0,0,.12);
  --xc-radius:       16px;

  position: fixed;
  bottom: 88px;
  right: 24px;
  z-index: 2100;
  font-family: 'Lato', -apple-system, sans-serif;
}

/* ── Toggle button ── */
#xt-chat-toggle {
  width: 60px; height: 60px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--xc-primary), var(--xc-primary-dk));
  border: none;
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  box-shadow: var(--xc-shadow);
  display: flex; align-items: center; justify-content: center;
  transition: transform .2s ease, box-shadow .2s ease;
  position: relative;
}
#xt-chat-toggle:hover { transform: scale(1.08); box-shadow: 0 12px 48px rgba(8,106,216,.35); }
#xt-chat-toggle .xc-icon-close { display: none; }
#xt-chat-widget.xc-open #xt-chat-toggle .xc-icon-open  { display: none; }
#xt-chat-widget.xc-open #xt-chat-toggle .xc-icon-close { display: inline; }

/* Online pulse dot */
#xt-chat-toggle::after {
  content: '';
  position: absolute; top: 2px; right: 2px;
  width: 13px; height: 13px;
  background: #22c55e;
  border-radius: 50%;
  border: 2px solid #fff;
  animation: xc-pulse 2.2s ease infinite;
}
#xt-chat-widget.xc-open #xt-chat-toggle::after { display: none; }

@keyframes xc-pulse {
  0%,100% { transform: scale(1); opacity: 1; }
  50%      { transform: scale(1.25); opacity: .75; }
}

/* ── Panel ── */
#xt-chat-panel {
  position: absolute;
  bottom: 72px; right: 0;
  width: 360px; height: 530px;
  background: #fff;
  border-radius: var(--xc-radius);
  box-shadow: var(--xc-shadow);
  display: flex; flex-direction: column;
  overflow: hidden;
  transform-origin: bottom right;
  transform: scale(.82) translateY(8px);
  opacity: 0;
  pointer-events: none;
  transition: transform .28s cubic-bezier(.34,1.56,.64,1), opacity .2s ease;
}
#xt-chat-widget.xc-open #xt-chat-panel {
  transform: scale(1) translateY(0);
  opacity: 1;
  pointer-events: all;
}

/* ── Header ── */
#xt-chat-header {
  background: linear-gradient(135deg, #0a3d70 0%, var(--xc-primary) 100%);
  padding: 14px 16px;
  display: flex; align-items: center; gap: 12px;
  flex-shrink: 0;
}
.xc-avatar {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: rgba(255,255,255,.15);
  display: flex; align-items: center; justify-content: center;
  overflow: hidden; flex-shrink: 0;
}
.xc-avatar img { width: 26px; filter: brightness(0) invert(1); }

.xc-header-info { flex: 1; }
.xc-header-info strong { display: block; color: #fff; font-size: 14px; font-weight: 700; line-height: 1.2; }
.xc-header-info span  { color: rgba(255,255,255,.8); font-size: 11.5px; display: flex; align-items: center; gap: 5px; }
.xc-status-dot { width: 7px; height: 7px; background: #4ade80; border-radius: 50%; display: inline-block; }

#xt-chat-close-btn {
  background: rgba(255,255,255,.15); border: none; color: #fff;
  width: 30px; height: 30px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; font-size: 15px; transition: background .15s; flex-shrink: 0;
}
#xt-chat-close-btn:hover { background: rgba(255,255,255,.28); }

/* ── Messages ── */
#xt-chat-messages {
  flex: 1; overflow-y: auto;
  padding: 14px 14px 6px;
  display: flex; flex-direction: column; gap: 10px;
  scroll-behavior: smooth;
}
#xt-chat-messages::-webkit-scrollbar { width: 4px; }
#xt-chat-messages::-webkit-scrollbar-track { background: transparent; }
#xt-chat-messages::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }

.xc-msg { display: flex; flex-direction: column; max-width: 84%; animation: xc-in .2s ease; }
@keyframes xc-in { from { opacity:0; transform:translateY(6px); } to { opacity:1; transform:translateY(0); } }

.xc-msg-bot  { align-self: flex-start; }
.xc-msg-user { align-self: flex-end; }

.xc-bubble {
  padding: 9px 13px;
  border-radius: 18px;
  font-size: 13px; line-height: 1.55;
  word-break: break-word;
  white-space: pre-wrap;
}
.xc-msg-bot  .xc-bubble { background: var(--xc-bot-bubble); color: var(--xc-text);  border-bottom-left-radius:  4px; }
.xc-msg-user .xc-bubble { background: var(--xc-primary);    color: #fff;             border-bottom-right-radius: 4px; }
.xc-msg-error .xc-bubble { background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }

.xc-time {
  font-size: 10.5px; color: var(--xc-muted);
  margin-top: 3px; padding: 0 3px;
}
.xc-msg-user .xc-time { text-align: right; }

/* ── Typing indicator ── */
#xt-typing {
  display: none; align-self: flex-start;
  padding: 10px 14px;
  background: var(--xc-bot-bubble);
  border-radius: 18px; border-bottom-left-radius: 4px;
  gap: 4px;
  animation: xc-in .2s ease;
}
#xt-typing span {
  width: 7px; height: 7px;
  background: #9ca3af; border-radius: 50%;
  display: inline-block;
  animation: xc-dot 1.2s infinite;
}
#xt-typing span:nth-child(2) { animation-delay: .2s; }
#xt-typing span:nth-child(3) { animation-delay: .4s; }
@keyframes xc-dot { 0%,60%,100% { transform:translateY(0); } 30% { transform:translateY(-5px); } }

/* ── Quick replies ── */
.xc-quick-replies { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 8px; }
.xc-qr {
  background: #fff; border: 1.5px solid var(--xc-primary);
  color: var(--xc-primary); border-radius: 20px;
  padding: 5px 11px; font-size: 11.5px; cursor: pointer;
  transition: all .15s; font-family: inherit;
}
.xc-qr:hover { background: var(--xc-primary); color: #fff; }

/* ── Input area ── */
#xt-chat-input-area {
  padding: 10px 14px;
  border-top: 1px solid #f0f0f0;
  display: flex; align-items: center; gap: 8px;
  flex-shrink: 0; background: #fff;
}
#xt-chat-input {
  flex: 1; border: 1.5px solid #e5e7eb; border-radius: 24px;
  padding: 9px 15px; font-size: 13px; outline: none;
  transition: border-color .15s; color: var(--xc-text);
  font-family: inherit; background: #f9fafb;
  resize: none; line-height: 1.4;
}
#xt-chat-input:focus { border-color: var(--xc-primary); background: #fff; }
#xt-chat-input::placeholder { color: #9ca3af; }

#xt-chat-send {
  width: 38px; height: 38px; border-radius: 50%;
  background: var(--xc-primary); border: none; color: #fff;
  font-size: 15px; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  transition: background .15s, transform .1s; flex-shrink: 0;
}
#xt-chat-send:hover   { background: var(--xc-primary-dk); }
#xt-chat-send:active  { transform: scale(.91); }
#xt-chat-send:disabled { background: #d1d5db; cursor: not-allowed; }

/* ── Footer branding ── */
#xt-chat-brand {
  text-align: center; padding: 5px; font-size: 10.5px;
  color: #b0b8c1; background: #fafafa; border-top: 1px solid #f0f0f0; flex-shrink: 0;
}

/* ── Mobile ── */
@media (max-width: 480px) {
  #xt-chat-widget { bottom: 80px; right: 16px; }
  #xt-chat-panel  { width: calc(100vw - 32px); right: -4px; height: 480px; }
}
</style>

<!-- XT Chat Widget -->
<div id="xt-chat-widget" role="region" aria-label="Live chat">

  <button id="xt-chat-toggle" aria-label="Open chat assistant" aria-expanded="false">
    <i class="bi bi-chat-dots-fill xc-icon-open"></i>
    <i class="bi bi-x-lg xc-icon-close"></i>
  </button>

  <div id="xt-chat-panel" role="dialog" aria-modal="true" aria-label="Xpansion AI chat">

    <div id="xt-chat-header">
      <div class="xc-avatar">
        <img src="assets2/images/logo.png" alt="Xpansion Technologies">
      </div>
      <div class="xc-header-info">
        <strong>Xpansion AI</strong>
        <span><span class="xc-status-dot"></span> Online &middot; Replies instantly</span>
      </div>
      <button id="xt-chat-close-btn" aria-label="Close chat">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>

    <div id="xt-chat-messages" role="log" aria-live="polite" aria-atomic="false">
      <div class="xc-msg xc-msg-bot">
        <div class="xc-bubble">Hi! I'm the Xpansion AI assistant. I can help you explore our services, products, and solutions. What brings you here today?</div>
        <div class="xc-quick-replies">
          <button class="xc-qr" data-msg="What services do you offer?">Our Services</button>
          <button class="xc-qr" data-msg="Tell me about your products">Products</button>
          <button class="xc-qr" data-msg="I need a custom IT solution">Custom Solution</button>
        </div>
      </div>
    </div>

    <div id="xt-typing" role="status" aria-label="Typing">
      <span></span><span></span><span></span>
    </div>

    <div id="xt-chat-input-area">
      <input type="text" id="xt-chat-input" placeholder="Ask me anything…" autocomplete="off" aria-label="Chat message">
      <button id="xt-chat-send" aria-label="Send message">
        <i class="bi bi-send-fill"></i>
      </button>
    </div>

    <div id="xt-chat-brand">Powered by <strong>Claude AI</strong> &middot; Xpansion Technologies</div>

  </div>
</div>

<script>
(function () {
  const widget    = document.getElementById('xt-chat-widget');
  const panel     = document.getElementById('xt-chat-panel');
  const toggleBtn = document.getElementById('xt-chat-toggle');
  const closeBtn  = document.getElementById('xt-chat-close-btn');
  const messages  = document.getElementById('xt-chat-messages');
  const typing    = document.getElementById('xt-typing');
  const input     = document.getElementById('xt-chat-input');
  const sendBtn   = document.getElementById('xt-chat-send');

  let history   = [];
  let busy      = false;

  // ── Open / Close ────────────────────────────────────────────
  function open()  {
    widget.classList.add('xc-open');
    toggleBtn.setAttribute('aria-expanded', 'true');
    input.focus();
    scrollBottom();
  }
  function close() {
    widget.classList.remove('xc-open');
    toggleBtn.setAttribute('aria-expanded', 'false');
  }

  toggleBtn.addEventListener('click', () => widget.classList.contains('xc-open') ? close() : open());
  closeBtn.addEventListener('click', close);

  // Close on Escape
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && widget.classList.contains('xc-open')) close();
  });

  // ── Helpers ─────────────────────────────────────────────────
  function scrollBottom() {
    messages.scrollTop = messages.scrollHeight;
  }

  function timeStr() {
    return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  }

  function appendMsg(role, text, isError) {
    const wrap   = document.createElement('div');
    wrap.className = 'xc-msg xc-msg-' + (isError ? 'bot xc-msg-error' : role);

    const bubble = document.createElement('div');
    bubble.className = 'xc-bubble';
    bubble.textContent = text;

    const time = document.createElement('div');
    time.className = 'xc-time';
    time.textContent = timeStr();

    wrap.appendChild(bubble);
    wrap.appendChild(time);
    messages.appendChild(wrap);
    scrollBottom();
  }

  function setLoading(on) {
    busy              = on;
    typing.style.display = on ? 'flex' : 'none';
    sendBtn.disabled  = on;
    input.disabled    = on;
    if (on) scrollBottom();
  }

  // ── Send ─────────────────────────────────────────────────────
  async function send(text) {
    text = text.trim();
    if (!text || busy) return;

    // Remove quick-reply chips on first message
    document.querySelectorAll('.xc-quick-replies').forEach(el => el.remove());

    history.push({ role: 'user', content: text });
    appendMsg('user', text);
    input.value = '';
    setLoading(true);

    try {
      const res  = await fetch('chat.php', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body:    JSON.stringify({ messages: history }),
      });

      let data;
      try { data = await res.json(); } catch (_) { data = {}; }

      if (!res.ok || data.error) {
        // Log full detail to console so admins can diagnose
        console.error('[Xpansion AI] chat.php error:', data);
        const userMsg = data.code === 'unconfigured'
          ? "The AI assistant isn't active yet. Please contact us at info@xpansion.com.au — we're happy to help!"
          : "Sorry, I couldn't respond right now. Please try again or email info@xpansion.com.au.";
        throw Object.assign(new Error(data.error || 'Server error'), { userMsg });
      }

      history.push({ role: 'assistant', content: data.reply });
      appendMsg('bot', data.reply);
    } catch (err) {
      history.pop(); // don't persist the failed turn
      appendMsg('bot', err.userMsg || "Sorry, I couldn't respond right now. Please email us at info@xpansion.com.au or try again.", true);
    } finally {
      setLoading(false);
      input.focus();
    }
  }

  sendBtn.addEventListener('click', () => send(input.value));
  input.addEventListener('keydown', e => {
    if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); send(input.value); }
  });

  // ── Quick replies ────────────────────────────────────────────
  messages.addEventListener('click', e => {
    const btn = e.target.closest('.xc-qr');
    if (!btn) return;
    if (!widget.classList.contains('xc-open')) open();
    send(btn.dataset.msg);
  });

})();
</script>
