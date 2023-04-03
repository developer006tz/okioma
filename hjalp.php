<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $startdum = filter_var($_POST['startdum'], FILTER_SANITIZE_STRING);
    $hjalp = filter_var($_POST['hjalp'], FILTER_SANITIZE_STRING);
    $tid = filter_var($_POST['tid'], FILTER_SANITIZE_STRING);
    $person = filter_var($_POST['person'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $medde = filter_var($_POST['medde'], FILTER_SANITIZE_STRING);
    if (empty($name) || empty($email) || empty($phone) ) {
        header('Location: bokahjalp.php?felnull');
        exit;
    }

    $to = 'info@okioma.se';
    $subject = 'Ny E-post FrÃ¥n ' . $name;
    $message = "Namn: $name\nAnvÃ¤ndarnamn: $email\nTelefon: $phone\nInnehÃ¥ll: $startdum \nHjÃ¤lp: $hjalp \nTid: $tid \nPerson: $person \nAddress: $address \nMeddelande: $medde";

    
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        header('Location: bokahjalp.php?skickad');

        echo json_encode($response);
        exit;
    } else {
        header('Location: bokahjalp.php?fel');
        exit;
    }
}

header('Location: bokahjalp.php');
exit;
?>