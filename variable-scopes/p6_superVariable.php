<?php

//wap in php to show global values in cases

$a=30;
$b=40;
//print_r($GLOBALS);

function display()
{
	$a=100;
	$b=200;
	//in local variable
	echo"the value of a from local : $a"; //100
	echo"\n";
	echo"the value of b from local : $b";  //200
	echo"\n";
	//use of Super global $GLOBAL
	echo"The value of a from global using SG : {$GLOBALS['a']}"; //30
	echo"\n";
	echo"The value of b from global  using SG : {$GLOBALS['b']}";  //40
	echo"\n";
	//use of globale keyword
    global $a,$b;
	echo"The value of a from global with using global keyword : $a";  //30
	echo"\n";
	echo"The value of b from global with using global keyword : $b";   //40
	echo"\n";
	//without use of global keyword
	$a=$GLOBALS['a'];
	$b=$GLOBALS['b'];
	echo"The value of a from global without using global keyword : $a";  //30
	echo"\n";
	echo"The value of b from global without using global keyword : $b";   //40
	
}
display();
?>