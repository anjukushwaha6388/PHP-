<?php
//wap in php to show reverse use in for lopp infinite
$no=readline("Enter the no : ");
$count=strlen($no);
//or
//$count=count(str_split($no));
$sum=0;
for($no=$no;$no!=0;$count--){
$q=$no/10;
$rem=$no%10;
$ef=$rem*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
}
echo$sum;
?>