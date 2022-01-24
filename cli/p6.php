<?php
//we will include scanner.php 
include 'scanner.php';
$p = input('enter the principale : ');
echo PHP_EOL;//meaning \n
echo $p;
$r = input('enter the rate : ');
echo PHP_EOL;
echo $r;
$t = input('enter the time : ');
echo PHP_EOL;
echo $t;
$si=$p*$r*$t/100;
echo" Total Simple Intrest is : ".$si;
?>