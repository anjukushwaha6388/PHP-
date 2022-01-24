<?php
//wap in php to show that when break is maindatory  with consecutive chaining effect
$n=readline("enter the n value : ");
switch($n)
{
	default:
	echo "default is running \n";
	break;
	case 1:
	echo "case 1 is running \n";
	case 2:
	echo "case 2 is running \n";
	case 3:
	echo "case 3 is running \n";
	case 4:
	echo "case 4 is running \n";
	case 5:
	echo "case 5 is running \n";
}

?>