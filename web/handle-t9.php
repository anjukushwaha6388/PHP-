<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];

$d=$n1/$n2;
$rem=$n1-($n2*$d);
printf("Remender is =%d",$rem);
/*
while($n1>=$n2)
{
	$n1=$n1-$n2;
}
$rem=$n1;
echo"Made by Anju ";
echo"</br>";
echo"</br>";
echo"Remender is (withoout % operator) = ".$rem;
*/
?>