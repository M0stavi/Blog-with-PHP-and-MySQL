<?php

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
    echo "print";
    return $stmt;

}



function selectAll($table, $conditions = []){

    global $conn;


    $sql = "SELECT * FROM users";

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


    $sql = "SELECT * FROM users";

    
        
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
    $sql = "INSERT INTO users SET ";

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

$data = [
    
    'username' => 'gg',
    'admin' => 1,
    'email' => 'korim@gmail.com',
    'password' => 'password'
];

$users = delete('users', 6);
ss($users);


?>