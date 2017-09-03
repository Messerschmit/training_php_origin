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
         echo "В начале введен не арифметический знак";
         return false;
     }
}

parce_variable_arg("+",1.8,5,3,10);

//Задание No4
//Функция должна принимать два параметра – целые числа. Если в функцию
//переданы не целые числа, то функция должна выводить ошибку на экран и
//завершать работу. Если в функцию передали 2 целых числа, то функция
//должна отобразить таблицу умножения размером со значения параметров,
//переданных в функцию.
//Например: tabl(4,3), то функция должна нарисовать следующий результат:
//1 2 3 4
//2 4 6 8
//3 6 9 12

function draw_table_pifaroga($numb_gorizont, $numb_vertical) {
    if ( is_int($numb_gorizont) & is_int($numb_vertical) 
            & $numb_gorizont > 0 
            & $numb_vertical > 0){
       for ($i = 1; $i <= $numb_vertical; $i++){
           for ($j = 1; $j <= $numb_gorizont; $j++){
               echo $j *  $i;
               echo ' ';
           }
           echo '<br>';
       }
    }else{
        echo "Error! The number isn't Integer!";
        return false;
    }
}

draw_table_pifaroga(5, 5);

//Задание No5
//Функция должна принимать в качестве аргумента массив чисел и возвращать
//так же массив, но отсортированный по возрастанию.
//Пример: В функцию передали [1, 22, 5, 66, 3, 57]. Вернула: [1, 3, 5, 22, 57, 66]

function sort_array($array) {
    echo 'Начальный массив'.'<br>';
    foreach ($array as $value) {
        echo $value.' ';
    };
    sort($array);
    echo '<br>';
    echo 'Отсортированный массив'.'<br>';
    foreach ($array as $value) {
        echo $value.' ';
    };
    echo '<br>';
}

$array = [5,8,9,25,1,4,8,25,169];
sort_array($array);

//Задание No6
//Создать рекурсивную функцию, которая принимает два целых числа,
//начальное и конечное значения, диапазон. Функция должна вывести список
//нечётных чисел в заданном диапазоне.
//Например: В функцию передали: 10 и 35. Функция должна вывести список
//нечётных чисел в диапазоне от 10 до 35.

function print_odd_numbers($number1, $number2) {
    if (is_int($number1) & is_int($number2)){
        if ($number1 <= $number2){
            if ($number1 % 2 != 0){
                echo $number1." ";
                $number1++;
                print_odd_numbers($number1, $number2);
            }else{
                $number1++;
                print_odd_numbers($number1, $number2);
            }
        }else{
            return false;
        }
    }else{
        echo "Error! The numbers isn't integer";
        return false;
    }
}

print_odd_numbers(10, 104);

echo '<br>';

//Задание No7
//Функция принимает 1 строковый параметр и возвращает TRUE, если строка
//является палиндромом, FALSE в противном случае.
//Палиндром – строка, одинаково читающаяся в обоих направлениях.

function is_palindrom($string) {
    //$string = str_replace(' ','',$string);
    $string = preg_replace('/\s/','',$string);
    $string_reverse = strrev($string);
    if (strcasecmp($string, $string_reverse) === 0){
        echo 'is palindrom!';
        return TRUE;
    }else{
        echo "isn't palindrom";
    }        
}

is_palindrom("Able was I ere I saw Elba");
echo '<br>';

//Задание No8
//1. Создать 3 функции, принимающие по 1 строковому параметру и выводящие
//на экран разные фразы с переданным параметром.
//2. Создать 4ю функцию, которая будет принимать 2 параметра:
//а) целое число
//б) строку и в зависимости от переданного числа функция должна вызвать
//одну из трёх функций со строковым параметром (1 – первая ф-ия, 2 –
//вторая, 3 -третья).
//3. Четвёртая функция также должна обрабатывать некорректный ввод целого
//числа.

function print_string1($string = "Hello world!") {
    echo $string."<br>";
}

function print_string2($string = "Bye everyone!") {
    echo $string."<br>";
}

function print_string3($string = "It's a sheet") {
    echo $string."<br>";
}

function check_number($number) {
    if (!is_int($number) || $number <= 0){
        echo "Error! The number isn't integer or less than 0";
        return false;
    }
}

function get_function($number, $string) {
    check_number($number);
    $name_function = "print_string".$number;
    if(function_exists($name_function)){
        $func = $name_function;
        $func();   
    }else{
        echo "Error! The function doesn't exist";
        return false;
    }
}

get_function(3, "Hello");
