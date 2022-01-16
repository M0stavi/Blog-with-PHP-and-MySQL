<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateMessage.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'contact';

$topics = selectAll($table);

$email = '';
$message = '';
$description = '';

$errors = array();

// ss($topics);

if (isset($_POST['send-msg'])) {
    // ss($_POST);
    // adminOnly();
    $errors = validateMessage($_POST);

    if (count($errors) === 0) {
        unset($_POST['send-msg']);
        // ss($_POST);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Message sent successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'index.php');
        exit(); 
    } else {
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
}










?>