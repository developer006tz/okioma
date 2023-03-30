<?php
session_start();

if (isset($_SESSION['response'])) {
    header('Content-Type: application/json');
    echo json_encode($_SESSION['response']);
    unset($_SESSION['response']);
} else {
    http_response_code(204);
}
?>