<?php

    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "my2_blog";
    
    //ООП подключения к БД
//    $connection = new mysqli($host, $username, $password, $dbname);
//    
//    if ($connection->connect_error){
//        die("Connection error: ".$connection->connect_error);
//    }
//    
//    echo 'Connection succesfully';
    
//    //Процедурное подключение БД
//    
//    $connection = mysqli_connect($host, $username, $password, $dbname);
//    
//    if (!$connection){
//        die("Connection error: ".mysqli_connect_error());
//    }
//    
//    echo 'Connection succesfully';
    
    //Подключение PDO к БД
    try{
        $connection = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        echo 'Connection succesfully';
    } catch (PDOException $ex) {
        echo 'Connection error: '.$ex->getMessage();
    }
    mysqli_close($connect);