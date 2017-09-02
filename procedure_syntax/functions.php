<?php

ini_set('display_errors',1); //включаем вывод ошибок
error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много

//Задание No1
//Функция должна принимать массив строк и выводить каждую строку в
//отдельном параграфе.

function print_array_of_string($array_of_string){
    foreach ($array_of_string as $value) {
        echo '<p>'.$value.'</p>';
    }  
}

$array_of_string = ["qwerty","privet","poka", "hello world!"];

print_array_of_string($array_of_string);

//Задание No2
//Функция должна принимать 2 параметра: а) массив чисел; б) строку,
//обозначающую арифметическое действие, которое нужно выполнить со
//всеми элементами массива. Функция должна вывести результат.
//Например: имя функции someFunction(array(1,2,3,4), ‘ – ’)
//Результат: 1 – 2 – 3 – 4 = 8

function parse_array_numb($array_int, $arithmetic) {
    $arithmetic_string = '';
    for ($i = 0; $i < count($array_int); $i++){
        
//        if ($i == 0){
//            $result = $array_int[$i];
//        }else{
//         $result += $array_int[$i];   
//        }
        
        if($array_int[$i] == $array_int[count($array_int)-1]){
            $arithmetic_string .= (string)$array_int[$i];
        }else{
            $arithmetic_string .= (string)$array_int[$i].(string)$arithmetic;
        }
    }
//    echo eval ('return ' . implode($arithmetic, $array_int) . ';').PHP_EOL;
//    echo '<br>';
    echo $arithmetic_string."=";
    echo eval ('return ' . $arithmetic_string . ';')."<br>".PHP_EOL; 
}

$array_int = [10,20,3,4];
$arithmetic = "-";
parse_array_numb($array_int, $arithmetic);

//Задание No3
//Функция должна принимать переменное число аргументов, но первым
//аргументом обязательно должна быть строка, обозначающая арифметическое
//действие, которое необходимо выполнить со всеми передаваемыми
//аргументами. Остальные аргументы целые и/или вещественные.
//Например: имя функции someFunction(‘+’, 1, 2, 3, 5.2);
//Результат: 1 + 2 + 3 + 5.2 = 11.2

function parce_variable_arg() {
    $array_param = [];
     if (gettype(func_get_arg(0)) === "string"){
        $array_param = func_get_args(); 
        $arithmetic = array_shift($array_param);
        echo eval('return '. implode($arithmetic, $array_param) . ";")."<br>".PHP_EOL;
         
     }else{
         return false;
     }
}

parce_variable_arg('-',1,5,3,10);