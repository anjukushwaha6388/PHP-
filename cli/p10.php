<?php
//wap in php to show the difference b/w null and undefined

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
printf("The memory x=%d",memory_get_usage($x));
echo PHP_EOL;
echo PHP_EOL;
echo"info about y";
echo PHP_EOL;

$y;
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
printf("The memory y=%d",memory_get_usage($y));
unset($y);
printf("The memory y=%d",memory_get_usage($y));
echo PHP_EOL;

echo PHP_EOL;
echo"info about z";
echo PHP_EOL;


$z=null;
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
printf("The memory z=%d",memory_get_usage($z));
unset($z);
printf("The memory z=%d",memory_get_usage($z));
?>