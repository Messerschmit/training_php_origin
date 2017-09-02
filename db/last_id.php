<?php

    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "testDB";
    
    try {
        $link = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        echo 'Connection succesfully <br>';
        $sql = "INSERT INTO users_new (name, password)
                VALUES ('Hrenova', 0022522)";
        $link->exec($sql);
        echo 'Record data Succesfully <br>';
        
        $last_id = $link->lastInsertId();
        echo 'Last id is '.$last_id.'<br>';
        
    } catch (PDOException $exc) {
        echo 'Error'.$exc->getMessage();
    }
