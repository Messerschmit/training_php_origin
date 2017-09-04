<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <?php $value['id'] = 10 ?>
    <body>
        <a href="get.php?action=add&id=<?=$admin = 110?>">Редактировать</a>
    </body>
</html>

<?php
$res = $_GET['action'];
if ($res === 'add') echo 'wadd';