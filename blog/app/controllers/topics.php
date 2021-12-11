<?php

include(ROOT_PATH . "/app/database/db.php");

$table = 'topics';

$topics = selectAll($table);

$id = '';
$name = '';
$description = '';

// ss($topics);

if (isset($_POST['add-topic'])){
    // ss($_POST);
    unset($_POST['add-topic']);
    // ss($_POST);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Topic created successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit(); 
}


if(isset($_GET['id'])){

    $id = $_GET['id'];

    $topic = selectOne($table, ['id' => $id]);
    // ss($topic);

    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];



}

if (isset($_POST['update-topic'])){
    // ss($_POST);

    $id = $_POST['id'];

    unset($_POST['update-topic'], $_POST['id']);

    // ss($id);

    $topic_id= update($table, $id, $_POST);
    $_SESSION['message'] = 'Topic updated successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit(); 



}






?>