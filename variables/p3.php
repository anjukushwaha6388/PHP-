<?php
//wap  in php boolean data type stored in variables;

$x=true;
echo $x;
echo PHP_EOL;
echo getType($x);
var_dump($x); //boolean true
echo PHP_EOL;

$y=TRUE;
echo $y;
echo PHP_EOL;
echo getType($y);
var_dump($y); //boolean true
echo PHP_EOL;

$z=TrUe;
echo $z;
echo PHP_EOL;
echo getType($z);
var_dump($z); //boolean true
echo PHP_EOL;

echo PHP_EOL;
echo 'On comparing all the tree values';
echo(true==TRUE);
echo PHP_EOL;
echo(True==TRUE);
echo PHP_EOL;
echo(1==true);
echo PHP_EOL;
var_dump(1===true);
?>