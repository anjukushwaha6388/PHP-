<?php
//we will include scanner.php 
include 'scanner.php';
$num1 = input('enter the number1 : ');
echo PHP_EOL;//meaning \n
echo $num1;
$num2 = input('enter the number2 : ');
echo PHP_EOL;
echo $num2;
$sum=$num1+$num2;
$sub=$num1-$num2;
$mul=$num1*$num2;
$div=$num1/$num2;
$rem=$num1%$num2;
echo"Addition is : ".$sum;
echo PHP_EOL;
echo"Subtraction is : ".$sub;
echo PHP_EOL;
echo"Multiplication is : ".$mul;
echo PHP_EOL;;
echo"Division is : ".$div;
echo PHP_EOL;;
echo" Remender is : ".$rem;
?>