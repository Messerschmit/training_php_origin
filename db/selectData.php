<?php

    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "testDB";
    
    $f_name = 'Hrenova';
    
    try {
        $link = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        echo 'Connection succesfully <br>';
        
        $sql = "SELECT * FROM users_new WHERE name = :user_name";
        
        $result = $link->prepare($sql);
        $result->execute(array('user_name' => $f_name));
                       
//        while ($row = $result->fetch()){
//            echo "<br> id: ".$row['id']."<br> name: ".$row['name']."<br> password: ".$row['password'].'<hr>';
//        }
        
        foreach ($result as $value) {
            echo "<br> id: ".$value['id']."<br> name: ".$value['name']."<br> password: ".$value['password'].'<hr>';
        }
        
        
        
    } catch (PDOException $exc) {
        echo 'Error'.$exc->getMessage();
    }
    
    $link = NULL;
    echo '<br>Connection closed';
