<?php
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
        http_response_code(400);
        echo 'Please fill in all required fields.';
        exit;
    }

    // Set up email
    $to = 'info@okioma.se';
    $subject = 'New Form Submission';
    $message = "Name: $name\nUsername: $username\nEmail: $email\nPhone: $phone\nContent: $content";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to index.html with success message
        header('Location: index.html?mailsent');
        exit;
    } else {
        // Handle email sending errors
        http_response_code(500);
        echo 'An error occurred while sending your message. Please try again later.';
        exit;
    }
}
?>