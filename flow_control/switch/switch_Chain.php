<?php
//wap in php to show chaining effect in switch
$n=readline("Enter the num 1 to 9 : ");
$i=1;
switch($n){
	case 1:
	echo "case 1 ".$i++."is executing \n"; 	
	//break;
	//exit;
	//return;
	//goto exit_label;
	case 2:
	echo "case 2 ".$i++." is executing \n";
	case 3:
	echo "case 3 ".$i++." is executing \n";
	case 4:
	echo "case 4 ".$i++." is executing \n";
	case 5:
	echo "case 5 ".$i++."  is executing \n";
	case 6:
	echo "case 6 ".$i++."  is executing \n";
	case 7:
	echo "case 7 ".$i++."  is executing \n";
	case 8:
	echo "case 8 ".$i++."  is executing \n";
	case 9:
	echo "case 9 ".$i++."  is executing \n";
	default:
	echo "default case 10 is executing \n";
}
//exit_label;
//use in chaining minimum 1 break; 
//break=>execution break,return=>b to t,exit=>all exit program execution,goto=>anywhere =>goto exit_lable -------exit_lable
?>