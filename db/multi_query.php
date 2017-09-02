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
        
        $link->beginTransaction();
        
        $link->exec("INSERT INTO users_new (name, password)
                VALUES ('Viktor', 222)");
        $link->exec("INSERT INTO users_new (name, password)
                VALUES ('Alexey', 333)");
        $link->exec("INSERT INTO users_new (name, password)
                VALUES ('Afonya', 444)");
        
        $link->commit();
        echo 'Record data Succesfully <br>';
        
    } catch (PDOException $exc) {
        echo 'Error'.$link->rollBack();
    }


