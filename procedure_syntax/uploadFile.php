<?php
    ini_set('display_errors',1); //включаем вывод ошибок
    error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    //print_r($_FILES['image']);
    if(isset($_FILES['image'])){
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        //$file_ext = strtolower(end( explode('.',$_FILES['image']['name']) ));
        
        $expensions = array("jpeg", "jpg", "png");
        
        if($file_size > 10097152){
            $errors[] = "Файл должен быть не более 10мб";
        }
        
        if(empty($errors) == true){
           $res = move_uploaded_file($file_tmp, "images/".$file_name) or die("Error");
           if ($res == true){
               echo 'Success!';
           }
        }else{
            print $errors;
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="btn">
        </form>
        <ul>
            <li>Sent file: <?= $file_name?></li>
            <li>File size: <?= $file_size?></li>
            <li>File type: <?= $file_type?></li>
        </ul>
    </body>
</html>

