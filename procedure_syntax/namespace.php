<?php

require_once 'index.php';

$obj1 = new \classUser\Admin("Petr", "User", "false"    , 1234);
echo '<br>';
$obj1->getStatus();
$obj1->getRules();
    


