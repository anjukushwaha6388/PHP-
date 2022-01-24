<?php
//wap in php to find the qudrant accoding .qudrant Condition

$x=readline("Enter the x value");
$y=readline("Enter the x value");
if($x>0 and $y>0)
	echo"1st Qurdant";
else if($x<0 and $y>0)
	echo"2nd Qurdant";
else if($x>0 and $y<0)
	echo"3rd Qurdant";
else
	echo"4th Qurdant";
?>