<?php

// session_start();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require('connect.php');





// var_dump($users);

function ss($value){

    echo "<pre>", print_r($value, true), "</pre>";

    die();

}

function executeQuery($sql,$data){
    global $conn;
    $stmt = $conn->prepare($sql);

    $values = array_values($data);
    // echo $values[1];
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);

    $stmt->execute();
    // echo "print";
    return $stmt;

}



function selectAll($table, $conditions = []){

    global $conn;


    $sql = "SELECT * FROM $table";

    if(empty($conditions)){
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        // var_dump($users);

        return $records;

    } else{

        
        // $sql = "SELECT * FROM $table WHERE username ='mahin' AND admin=1";
        $i=0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . " WHERE $key=?";

            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
            
        }

        // ss($sql);
       $stmt = executeQuery($sql, $conditions);

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        // var_dump($users);

        return $records;

    }

    



}


function selectOne($table, $conditions){

    global $conn;


    $sql = "SELECT * FROM $table";

    
        
        // $sql = "SELECT * FROM $table WHERE username ='mahin' AND admin=1 LIMIT 1";
        
        
        $i=0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . " WHERE $key=?";

            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
            
        }

        // ss($sql);

        // $sql = $sql . "LIMIT 1";
        $stmt = executeQuery($sql, $conditions);

        $records = $stmt->get_result()->fetch_assoc();

        // var_dump($users);

        return $records;

    

    



}



function create($table, $data)
{
    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $mid = $stmt->insert_id;
    return $mid;
}



function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

function getPublishedPosts()
{
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}


function getPostsByTopicId($topic_id)
{
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";

    $stmt = executeQuery($sql, ['published' => 1, 'topic_id' => $topic_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}








function searchPosts($term)
{
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT 
                p.*, u.username 
            FROM posts AS p 
            JOIN users AS u 
            ON p.user_id=u.id 
            WHERE p.published=?
            AND p.title LIKE ? OR p.body LIKE ?";


    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}






?>