<?php
//wap in php to show local and global scopes of variable

$a=10;
echo "The value of a at global scope is $a";  //10
echo PHP_EOL;
function display()
{
	$b=150;
	global $a;  //get the variable from heap
	echo "The value of a at global scope is $a";  //10
	echo PHP_EOL;
	echo "The value of b at local scope is $b";  //200
	echo PHP_EOL;
}
display();
echo "The value of a at global scope is $a"; //10
?>