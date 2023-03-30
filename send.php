<?php
session_start();

// Only process the form if it is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);

    // Validate form inputs
    if (empty($name) || empty($email) || empty($content)) {
        // Handle form validation errors
        $_SESSION['response'] = array('status' => 'error', 'message' => 'Please fill in all required fields.');
        header('Location: index.html?mailsenterror');
        exit;
    }

    // Set up email
    $to = 'info@okioma.se';
    $subject = 'New Form Submission';
    $message = "Name: $name\nUsername: $username\nEmail: $email\nPhone: $phone\nContent: $content";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Handle success
        $_SESSION['response'] = array('status' => 'success', 'message' => 'Your message has been sent successfully.');
        header('Location: index.html?mailsent');
        exit;
    } else {
        // Handle email sending errors
        $_SESSION['response'] = array('status' => 'error', 'message' => 'An error occurred while sending your message. Please try again later.');
        header('Location: index.html?mailsenterror');
        exit;
    }
}

// Redirect to index.html page if accessed directly
header('Location: index.html');
exit;
?>