<?php
//we will include scanner.php 
include 'scanner.php';
$name = input('enter the name : ');
echo PHP_EOL;
//meaning \n //echo json_encode(PHP_EQL);  :--->\r\n---->\r---return \n---new line
echo $name;
$class = input('enter the class : ');
echo $class;
?>