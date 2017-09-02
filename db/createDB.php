<?php
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    
    //ООП
//    $connect = new mysqli($host, $username, $password);
//    
//    if($connect->connect_error){
//        die("Connection Error: " .$connect->connect_error);
//    }else{
//        echo "Connection Succesfully";
//    }
//    
//    $sql = "CREATE DATABASE testDB";
//    
//    if ($connect->query($sql) === TRUE){
//        echo 'Database create Succesfully';
//    }else{
//        echo "Error: ". $connecnt->error;
//    }

//    //Процедурный подход
//    $connect = mysqli_connect($host, $username, $password);
//    
//    if(!$connect){
//        die("Connection Error: " .mysqli_connect_error());
//    }else{
//        echo "Connection Succesfully <br>";
//    }
//    
//    $sql = "CREATE DATABASE testDB";
//    
//    if (mysqli_query($connect,$sql)) {
//        echo 'Database create Succesfully <br>';
//    }else{
//        echo "Error: ". mysqli_error($connect);
//    }
//    mysqli_close($connect);
    //PDO
    try{
        $link = new PDO("mysql:host = $host;", $username, $password);
        echo "Connection Succesfully <br>";
        $sql = "CREATE DATABASE testDB";
        $link->exec($sql);
        echo "Database create Succesfully <br>";
    } catch (PDOException $ex) {
        echo 'Error'.$ex->getMessage();
    }