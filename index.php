<?php

// Task #1

// Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
// результат присвойте переменной $c. Затем создайте переменную $d, 
// присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
// в переменную $result. Выведите на экран значение переменной $result. 

$a=17 ;
$b=10;

$c=$a-$b;

$d=7;

$result=$c+$d;

echo $result; // 14
echo '<hr>';


//........................................................

// Task #2

// Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат 
// присвойте переменной $result. Выведите на экран значение 
// переменной $result. 

$c=15; 
$d=2;

$result=$c+$d;

echo $result; // 17
echo '<hr>';

//........................................................

// Task #3

// Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
// переменных и операции сложения строк выведите на экран фразу 'Привет, 
// Мир!'. 

$text1='Привет, ';
$text2='Мир!';

echo $text1 . $text2;
echo '<hr>';

//........................................................

// Task #4

// Создайте переменную $name и присвойте ей ваше имя. Выведите на 
// экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 

$name = 'Алина!';
echo 'Привет, ', $name,'!';
echo '<hr>';


//........................................................

// Task #5

// Создайте переменную $age и присвойте ей ваш возраст. Выведите на 
// экран 'Мне %Возраст% лет!'.

$age = 21;
echo 'Мне ' . $age . 'год';
echo '<hr>';

//........................................................

// Task #6

// Если переменная $a равна 10, то выведите 'Верно', иначе выведите 
// 'Неверно'.

var num = 10;
if (num == 10) {
	echo('Верно');
} else {
	echo('Неверно');
}
echo '<hr>';