<?php
//wap in php to show global scope defined from local scope
$a=10;
echo"The value of a from global :$a";
echo PHP_EOL;
function test1()
{
	global $a;
	//global $b;
	$b=30;
	echo "The value of a from local iside test 1:$a";
    echo PHP_EOL;
	echo "The value of b from local iside test 1:$b";
    echo PHP_EOL;
}
test1();
$b=50;
echo "The value of b from global outside :$b";
    echo PHP_EOL;
function test2()
{
	global $a;
	global $b;
	echo "The value of a from local iside test 2:$a";
    echo PHP_EOL;
	echo "The value of b from local iside test 2:$b";
    echo PHP_EOL;
}
test2();
?>