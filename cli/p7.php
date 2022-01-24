<?php
//we will include scanner.php 
include 'scanner.php';
$num1 = input('enter the number1 : ');
echo PHP_EOL;//meaning \n
echo $num1;
$num2 = input('enter the number2 : ');
echo PHP_EOL;
echo $num2;
$div=$num1/$num2;
$rem=$num1-$div;
printf("Remender is = %d",$rem);
?>