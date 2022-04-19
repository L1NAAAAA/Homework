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


if ($a == 10) {
	echo('Верно');
} else {
	echo('Неверно');
}
echo '<hr>';

//........................................................

// Task #7


// В переменной $min лежит число от 0 до 59. Определите в
// какую четверть часа попадает это число (в первую, вторую, третью или
// четвертую).

$min = 59;

$quarter = 59 / 4;

for ($i=1; $i <= 4; $i++) {
if ($min <= $quarter * $i) {
switch ($i) {
case 1:
echo 'первая четверть';
break;
case 2:
echo 'вторая четверть';
break;
case 3:
echo 'третья четверть';
break;
case 4:
echo 'четвертая четверть';
break;
}
break;
}
}
echo '<hr>';

//........................................................

// Task #8

// Переменная $num может принимать одно из значений: 1, 2, 3 или 4. 
// Если она имеет значение '1', то в переменную $result запишем 'зима', если 
// имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case. 


$num = 2;
switch ($num) {
case 1:
$result = 'зима';
break;
case 2:
$result = 'лето';
break;
case 3:
$result = 'весна';
break;
case 4:
$result = 'осень';
break;
}
echo($result);
echo '<hr>';

//........................................................

// Task #9

// Дана строка с цифрами, например, '12345'. Проверьте, что первым 
// символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', 
// в противном случае выведите 'нет'.

$test = '12345';

$firstNum = substr($test, 0, 1);
if ($firstNum == 1 or $firstNum == 2 or $firstNum == 3 ) {
echo 'Да';
} else {
echo 'Нет';
}

echo '<hr>';

//........................................................

// Task #10

// В переменной $year хранится год. Определите, является ли
// он високосным (в таком году есть 29 февраля). Год будет високосным в двух
// случаях: либо он делится на 4, но при этом не делится на 100, либо делится
// на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они
// делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они
// делятся на 400.

$year = 2022;

if ($year / 4 == round($year / 4) and $year / 100 != round($year / 100) or $year / 400 == round($year / 400)) {
echo 'високосный';
} else {
echo 'не високосный';
}
echo '<hr>';

//........................................................

// Task #11

// В переменной $month лежит какое-то число из интервала от 1 до 12. 
// Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).

$month = (rand(1, 12)) % 12;
$season = null;

if ($month >= 0 && $month <= 2) {
    $season = 'Зима';
} elseif ($month >= 3 && $month <= 5) {
    $season = 'Весна';
} elseif ($month >= 6 && $month <= 8) {
    $season = 'Лето';
} else {
    $season = 'Осень';
}

echo $season;
echo '<hr>';

//........................................................

// Task #12

// Выведите столбец чисел от 1 до 100.


for($i=1; $i<101; $i++) echo $i . '<br>';
echo '<hr>';

//........................................................

// Task #13

// Выведите столбец чисел от 11 до 33.

for($i=11; $i<34; $i++) echo $i . '<br>';
echo '<hr>';

//........................................................

// Task #14

// Выведите столбец четных чисел в промежутке от 0 до 100.

for($i=0; $i <= 100; $i++) {
    if ($i % 2 == 0) echo $i . '<br>';
    }
    echo '<hr>';



//........................................................

// Task #15

// С помощью цикла найдите сумму чисел от 1 до 100.

$i = 1;
$sum = 0;
while ($i <= 100) {
    $sum += $i++;
}
 
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo '<hr>';

//..................................................../

// Основы 2. Task 1.

// Создайте переменные $a, $b и присвойте им положительные 
// числа. Присвойте частное от деления $a/$b третьей переменной $d. 
// Используя условный оператор if, осуществите схему вывода на экран 
// значения переменной $d только в том случае, если оно является 
// положительным числом. Проверьте работу скрипта, после чего 
// измените одно из значений переменных на отрицательное число и 
// снова запустите скрипт.

$a = 5;
$b = 4;
$d = $a/$b;
if($d>0){
    echo $d;
}

echo '<hr>';