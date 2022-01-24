<?php
//wap in php to show odd and even using switch

$x=readline("Enter the number : ");
switch($x%2)    //no of sample (0,1)
{
	
	case 0:
	echo "$x is Even number";
	break;
	case 1:
	echo "$x is Odd number";
	break;
}
//this program is not use in default cases
?>