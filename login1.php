<?php
$login_success = null;

// Hardcoded credentials (for demo purposes only)
$valid_email = "user@quickcart.com";
$valid_password = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if ($email === $valid_email && $password === $valid_password) {
        $login_success = true;
    } else {
        $login_success = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Quick Cart</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .login-section {
      padding: 60px 20px;
      background-color: #fff;
      text-align: center;
    }
    .container {
      max-width: 600px;
      margin: auto;
    }
    h1 {
      color: #27ae60;
      font-size: 2.5em;
    }
    p {
      color: #555;
      font-size: 1em;
    }
    .success-message {
      color: green;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .error-message {
      color: red;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .login-form input {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1em;
    }
    .login-form button {
      background-color: #27ae60;
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .login-form button:hover {
      background-color: #219150;
    }
  </style>
</head>
<body>
  <section class="login-section">
    <div class="container">
      <h1>Login</h1>
      <p>Welcome back! Please login to continue ordering with Quick Cart.</p>

      <?php if ($login_success === true): ?>
        <p class="success-message">Login successful! Welcome to Quick Cart.</p>
      <?php elseif ($login_success === false): ?>
        <p class="error-message">Invalid email or password. Please try again.</p>
      <?php endif; ?>

      <form method="POST" class="login-form">
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
        
      </form>
    </div>
  </section>
</body>
</html>
