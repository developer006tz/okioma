<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];

    $to = 'info@okioma.se';
    $subject = 'New Form Submission';
    $message = "Name: $name\nUsername: $username\nEmail: $email\nPhone: $phone\nContent: $content";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: index.html?mailsent');
}
?>