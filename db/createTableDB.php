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
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE users_new(
                id INT(11) NOT NULL AUTO_INCREMENT,
                name CHAR(30) NOT NULL,
                password INT(30) NOT NULL,
                PRIMARY KEY(id)
                )";
        $link->exec($sql);
        echo 'Table create succesfully';
    } catch (PDOException $exc) {
        echo 'Error: '.$exc->getMessage();
    }
    
    $link = NULL;


