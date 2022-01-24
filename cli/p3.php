<?php
//we will include scanner.php 
include 'scanner.php';
$num1 = input('enter the number1 : ');
echo PHP_EOL;//meaning \n
echo $num1;
$num2 = input('enter the number2 : ');
echo PHP_EOL;
echo $num2;
$num3 = input('enter the number3 : ');
echo PHP_EOL;
echo $num3;
$sum=$num1+$num2+$num3;
echo" Total Sum is : ".$sum;
?>