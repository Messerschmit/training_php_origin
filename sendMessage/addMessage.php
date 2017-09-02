<?php
ini_set('display_errors',1); //включаем вывод ошибок
error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много

$host = "localhost";
$username = "root";
$password = "root";
$dbname = "testDB";
$db_message = "message";
$db_content = "content";

try {
    $link = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    
    if(empty($_POST['name'])){
        exit("Нет заполнено!");
    }
    
    if(empty($_POST['content'])){
        exit("Нет заполнено!");
    }
    
    
    $query = "INSERT INTO $db_message (name, date)
                VALUES (:name, NOW())";
    //$link->exec($query);
    
    $msg = $link->prepare($query);
    $msg->execute(['name' => $_POST['name']]);
    
    $msg_id = $link->lastInsertId();
    
    $query = "INSERT INTO $db_content (content, message_id)
                VALUES (:content, :message_id)";
    $msg = $link->prepare($query);
    $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);
    
    header("Location: index.html");
    
} catch (PDOException $ex) {
    echo 'Error'.$ex->getMessage();
}

$link = NULL;


