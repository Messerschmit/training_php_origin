
<?php
//старт сессии
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
     <?php
     //передаем в переменную сессии с именем в кавычках = значение
        $_SESSION["favcolor"] = "red&white";
        $_SESSION["favpage"] = "home";
        //вызываем из сессии значении переменной
        echo $_SESSION["favcolor"].'  '.$_SESSION["favpage"];
        
        echo '<br>'.$_SESSION["favpage"];
     ?>   
    </body>
</html>
