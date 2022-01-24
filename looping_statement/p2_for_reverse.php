<?php
//wap in php to show reverse use in for lopp infinite
$no=readline("Enter the no : ");
$count=readline("Enter the count : ");
$sum=0;
for(;;){
$q=$no/10;
$rem=$no%10;
$ef=$rem*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
$count--;
if($no==0)
{
break;
}
}
echo$sum;
?>
