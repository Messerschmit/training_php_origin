<?php
session_start();
//вызываем из запущенной сессии значении переменной
echo  $_SESSION["favpage"];
session_unset();
echo  $_SESSION["favpage"];
