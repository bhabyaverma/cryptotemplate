<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bitcoin Account Signup</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #0f0f0f, #1a1a1a);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .btc-signup-container {
      background-color: #1d1d1d;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 0 15px #f7931a;
      width: 100%;
      max-width: 420px;
    }

    .btc-signup-title {
      text-align: center;
      margin-bottom: 25px;
      color: #f7931a;
    }

    .btc-input-group {
      margin-bottom: 18px;
    }

    .btc-input-label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
    }

    .btc-input-field {
      width: 100%;
      padding: 10px;
      border: 1px solid #444;
      border-radius: 8px;
      background-color: #2a2a2a;
      color: #fff;
    }

    .btc-input-field:focus {
      outline: none;
      border-color: #f7931a;
    }

    .btc-password-group {
      position: relative;
    }

    .btc-toggle-icon {
      position: absolute;
      right: 15px;
      top: 38px;
      cursor: pointer;
      color: #f7931a;
      font-size: 18px;
    }

    .btc-submit-btn {
      width: 100%;
      background-color: #f7931a;
      border: none;
      padding: 12px;
      border-radius: 8px;
      color: #fff;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }

    .btc-submit-btn:hover {
      background-color: #e57c0c;
    }
  </style>
</head>
<body>
  <div class="btc-signup-container">
    <h2 class="btc-signup-title">Create Your Bitcoin Account</h2>
    <form id="btcSignupForm">
      <div class="btc-input-group">
        <label for="btcName" class="btc-input-label">Full Name</label>
        <input type="text" id="btcName" class="btc-input-field" required />
      </div>

      <div class="btc-input-group">
        <label for="btcEmail" class="btc-input-label">Email Address</label>
        <input type="email" id="btcEmail" class="btc-input-field" required />
      </div>

      <div class="btc-input-group btc-password-group">
        <label for="btcPassword" class="btc-input-label">Password</label>
        <input type="password" id="btcPassword" class="btc-input-field" required />
        <span class="btc-toggle-icon" onclick="btcTogglePassword()">👁️</span>
      </div>

      <button type="submit" class="btc-submit-btn">Sign Up</button>
    </form>
  </div>

  <script>
    function btcTogglePassword() {
      const pwdField = document.getElementById('btcPassword');
      const currentType = pwdField.getAttribute('type');
      pwdField.setAttribute('type', currentType === 'password' ? 'text' : 'password');
    }

    document.getElementById('btcSignupForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('btcName').value.trim();
      const email = document.getElementById('btcEmail').value.trim();
      const password = document.getElementById('btcPassword').value;

      if (!name || !email || !password) {
        alert('Please fill in all fields.');
        return;
      }

      alert('Signup successful!');
      // Here, you would send data to the backend with AJAX or form action.
    });
  </script>
</body>
</html>
