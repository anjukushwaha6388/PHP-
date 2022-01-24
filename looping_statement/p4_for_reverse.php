<?php
$no=readline("Enter the no : ");

$sum=0;
for(;$no>1;$no=$no/10){
//$q=$no/10;
$rem=$no%10;

$sum=($sum*10)+$rem;
}
echo$sum;
?>

