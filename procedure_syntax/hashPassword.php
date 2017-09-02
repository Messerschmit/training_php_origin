<?php

$password = "19SergeyK87";
echo 'Пароль по умолчанию: '.$password.'<br>';

$hash = password_hash($password, PASSWORD_DEFAULT);
echo 'Пароль хеширован: '.$hash.'<br>';

if (password_verify('SergeyK', $hash)){
    echo 'Пароль корректен';    
} else {
    echo 'Пароль не корректен';    
}


