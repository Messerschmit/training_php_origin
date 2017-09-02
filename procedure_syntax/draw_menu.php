<?php
    $menu = [
                "Home" => "index.php",
                "Gallery" => "gallery.php",
                "Documents" => "doc.php",
                "Contacts" => "contact.php",
                "About" => "about.php"
            ];
?>
<html>
    <head>
        <title>draw_menu</title>
    </head>
    <body>
        <h1>Head Menu</h1>
        <hr>
        <ul>
            <?php foreach($menu as $key=>$value): ?>
            <li><a href="<?= $value ?>"><?= $key ?></a></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>
