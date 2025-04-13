<?php
$success = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize inputs
    $name     = htmlspecialchars(trim($_POST['name']));
    $email    = htmlspecialchars(trim($_POST['email']));
    $phone    = htmlspecialchars(trim($_POST['phone']));
    $password = htmlspecialchars(trim($_POST['password'])); // In production, hash this!

    // Prepare a simple response (or save to DB if needed)
    $to      = "your-email@example.com"; // Replace with your email
    $subject = "New Quick Cart Signup: $name";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nPassword: $password";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $success = true;
    } else {
        $success = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up | Quick Cart</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .signup-section {
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
    .signup-form input {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1em;
    }
    .signup-form button {
      background-color: #27ae60;
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .signup-form button:hover {
      background-color: #219150;
    }
  </style>
</head>
<body>
  <section class="signup-section">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Create your Quick Cart account and start ordering your favorites!</p>

      <?php if ($success === true): ?>
        <p class="success-message">Thank you for signing up! We'll reach out shortly.</p>
      <?php elseif ($success === false): ?>
        <p class="error-message">Something went wrong. Please try again later.</p>
      <?php endif; ?>

      <form method="POST" class="signup-form">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="tel" name="phone" placeholder="Phone Number" required />
        <input type="password" name="password" placeholder="Create Password" required />
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </section>
</body>
</html>
