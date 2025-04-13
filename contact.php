<?php
$success = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email setup
    $to      = "your-email@example.com"; // Replace with your email
    $subject = "Quick Cart Contact Form Message from $name";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
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
  <title>Contact Us | Quick Cart</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .contact-section {
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
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1em;
    }
    .contact-form button {
      background-color: #27ae60;
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .contact-form button:hover {
      background-color: #219150;
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <div class="container">
      <h1>Contact Us</h1>
      <p>Have a question, feedback, or need help? Fill out the form below and we’ll get back to you!</p>

      <?php if ($success === true): ?>
        <p class="success-message">Thank you! Your message has been sent.</p>
      <?php elseif ($success === false): ?>
        <p class="error-message">Oops! Something went wrong. Please try again later.</p>
      <?php endif; ?>

      <form method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your Full Name" required />
        <input type="email" name="email" placeholder="Your Email Address" required />
        <input type="tel" name="phone" placeholder="Your Phone Number" />
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
</body>
</html>
