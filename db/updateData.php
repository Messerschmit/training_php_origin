<?php

    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "testDB";
    $user_name = 'Inokentiy';
    $id_user = 8;

    
    try {
        $link = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        echo 'Connection succesfully <br>';
        
        $sql = "UPDATE users_new set name = :user_name WHERE id = :id_user";
        
        $result = $link->prepare($sql);
        $result->bindParam('id_user', $id_user);
        $result->bindParam('user_name', $user_name);
        if ($result->execute()){
            echo 'Change data ok!';
        }                        
        
        
    } catch (PDOException $exc) {
        echo 'Error'.$exc->getMessage();
    }
    
    $link = NULL;
    echo '<br>Connection closed';