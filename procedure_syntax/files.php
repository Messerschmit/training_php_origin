<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        ini_set('display_errors',1); //включаем вывод ошибок
        error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
        //открытие файла
          $f = fopen('testFiles/text.txt', 'a') 
                  or die ("Error!");
        /*
        //прочитали файл (в конце добавилось количество байт)
          echo readfile('testFiles/text.txt'); 
        //чтение и закрытие файла
          echo '<br>'.fread($f, filesize('testFiles/text.txt'));
          fclose($f);

        //считать первую строку
            echo fgets($f, 210);
        
      
        //считать файл по одному символу, пока конец не будет найден
            while(!feof($f)){
                echo fgets($f, 100);
            }
        */
       $string = "New content has written";   
       fwrite($f, $string) or die("Error!");
       fclose($f);
       $s = fopen('testFiles/text.txt', 'r') or die ("Error!");
       echo fread($s, filesize('testFiles/text.txt'));
       
       $new_f = fopen('testFiles/newFile.ass', 'a') or die ("Error!");
       fwrite($new_f, "HELLO WORLD!!!");
       fclose($new_f);
       $new_s = fopen('testFiles/newFile.ass', 'r') or die ("Error!");
       echo '<br>'.fread($new_s, filesize('testFiles/text.txt'));
        ?>
    </body>
</html>
