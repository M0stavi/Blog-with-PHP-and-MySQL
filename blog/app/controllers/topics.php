<?php

include(ROOT_PATH . "/app/database/db.php");

if (isset($_POST['add-topic'])){
    // ss($_POST);
    unset($_POST['add-topic']);
    // ss($_POST);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'TOpic created successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit(); 
}









?>