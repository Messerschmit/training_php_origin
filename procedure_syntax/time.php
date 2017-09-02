<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            //вывод даты в разный форматах
            echo date("d F Y h:i:s A");
            echo '<br>'.date(d.l.F.Y)."<br>";
            //отображает данные числа следующей недели в этот день
            $nextWeek = time() + (7*24*60*60);            
            echo 'Now'.date("Y-m-d")."<br>";
            echo 'Now'.date("Y-m-d", $nextWeek)."<br>";
            //Вывод даты в текущей локализации
            setlocale(LC_ALL,'');
            echo strftime("%B %Y года , %d число. %A, %H:%M ");
            //вывод вчерашнего дня
            echo '<br>'.date("Y-m-d", strtotime("-1 day"));
        ?>

    </body>
</html>


