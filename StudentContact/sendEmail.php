<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $recipient = "your-email@example.com"; // Update with your email address
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate form data
  if (empty($name) || empty($email) || empty($message)) {
    // Required fields are missing
    echo "Please fill out all the required fields.";
    exit();
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Invalid email format
    echo "Please enter a valid email address.";
    exit();
  }

  // Send email
  $subject = "New message from $name";
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message:\n$message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($recipient, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Email sent successfully.";
  } else {
    // Error sending email
    echo "Error sending email. Please try again later.";
  }
} else {
  // Redirect back to the contact page if accessed directly without form submission
  header("Location: contact.html");
  exit();
}
?>
