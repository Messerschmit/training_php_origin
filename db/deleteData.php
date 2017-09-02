<?php

    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "testDB";
    $table_name = "users_new";
    $user_name = 'Ivan';
    $id_user = 8;

    
    try {
        $link = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        echo 'Connection succesfully <br>';
        
//        $sql = "DELETE FROM users_new WHERE name = :user_name";        
//        $result = $link->prepare($sql);
////        $result->bindParam('user_id', $id_user);
//        $result->bindParam('user_name', $user_name);
//        if ($result->execute()){
//            echo 'delete data ok!';
//        }                        
//        
        //Удаление всей таблицы
          $sql_delete_all_table = "TRUNCATE TABLE $table_name";
          $result_delete_all_table = $link->exec($sql_delete_all_table);
        
    } catch (PDOException $exc) {
        echo 'Error'.$exc->getMessage();
    }
    
    $link = NULL;
    echo '<br>Connection closed';