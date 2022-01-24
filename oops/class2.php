<?php
//wap in php to show , Empty class
class Test
{
	
	
}
$test=new Test();  //instantion  //new keyord--( new memmory) in heap ||generate of resource object
var_dump($test);
$test=Test();
var_dump($test);  //assignment //stack
$test=10;
var_dump($test);  //assignment  //stack

function Test()
{
	return"Whats your Name";
}
?>