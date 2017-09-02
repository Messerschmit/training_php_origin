<?php
    $counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
    $counter++;
    setcookie("counter", $counter, time()+86400);
    
    echo $counter;

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>title</title>
    </head>
    <body>

    </body>
</html>

