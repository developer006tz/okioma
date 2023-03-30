<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
    if (empty($name) || empty($email) || empty($content)) {
        header('Location: index.php?felnull');
        exit;
    }

    $to = 'info@okioma.se';
    $subject = 'Ny E-post FrÃ¥n '.$name;
    $message = "Namn: $name\nAnvÃ¤ndarnamn: $username\nE-post: $email\nTelefon: $phone\nInnehÃ¥ll: $content";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header('Location: index.php?skickad');

        echo json_encode($response);
        exit;
    } else {
        header('Location: index.php?fel');
        exit;
    }
}

header('Location: index.php');
exit;
?>