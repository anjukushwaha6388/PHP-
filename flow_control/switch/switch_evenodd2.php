<?php
//wap in ohp to show odd and even default case in switch

$x=readline("Enter the number : ");
switch($x%2)    //rem (0,1) --->total case=>2  --->1=>default  ----->(n-1)=>case
{
	
	case 0:
	echo "$x is Even number";
	break;
	default:
	echo "$x is Odd number";
	break;
}

?>