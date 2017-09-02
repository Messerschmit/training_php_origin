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
                VALUES ('Petr', 8821452)";
        $link->exec($sql);
        echo 'Record data Succesfully';
    } catch (PDOException $exc) {
        echo 'Error'.$exc->getMessage();
    }


