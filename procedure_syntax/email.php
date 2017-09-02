<?php   
    $to = "kasatkin87@gmail.com";
    $subject = "hello!";
    $message = "hello world";
    $headers = "Content-type:text/html; charset = windows-1251\r\n";
    $headers .="From: example@gmail.com";
    
    mail($to, $subject, $message, $headers);

?>
