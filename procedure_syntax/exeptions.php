<?php
$file = 'namespa1ce.php';

try {
    if (!file_exists($file)){
        throw new Exception('File not found!');
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}

