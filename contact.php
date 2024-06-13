<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Set your email address where you want to receive emails
    $to = "info@calliopebiophysics.com";

    // Set the email subject
    $subject = "Calliope Biophysics || Message from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to the thank you page
        header("Location: contact-thank-you.html");
        exit;
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    };

    // Redirect to the thank you page
    header("Location: contact-thank-you.html");
    exit;
} else {
    echo "Invalid request method."
}
?>
