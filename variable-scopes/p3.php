<?php
//wap in php to show priority of local and global scopes of variable

$a=10;
echo "The value of a at global scope is $a";  
echo PHP_EOL;
function display()
{
	$b=150;
	global $a;  //get the variable from heap
	echo "The value of a at global scope is $a";  
	echo PHP_EOL;
	echo "The value of b at local scope is $b";  
	echo PHP_EOL;
	$a=50;
	echo "The value of a at local scope is $a";  
	echo PHP_EOL;
}
display();
echo "The value of a at global scope is $a"; 
?>