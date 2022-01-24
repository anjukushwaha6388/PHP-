<?php
// wap in php show,floating point numbers
//$x=010;// conversion of octal number system(00-07 or 0-7)
echo PHP_EOL;
$x=011;   //octal
echo $x;
echo PHP_EOL;

//$a=08; //invalid numerical literal(conversion of octal range not possiable)
//echo $a;

echo PHP_EOL;
$b=10.7;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c=10.00;
echo $c;
echo getType($c);
echo PHP_EOL;
var_dump($c);

echo PHP_EOL;
$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);
echo PHP_EOL;
var_dump($d);

echo PHP_EOL;
$z=0.5;
echo $z;
echo getType($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
$w=.5;
echo $w;
echo PHP_EOL;
echo getType($w);
echo PHP_EOL;
var_dump($w);

echo PHP_EOL;
$p='a';
$p.=$w;
echo $p;
echo PHP_EOL;
echo getType($p);
echo PHP_EOL;
var_dump($p);


echo PHP_EOL;
$mark=9.99999999999999; //character length 16 and decimal 14 

echo $mark;
echo PHP_EOL;
echo getType($mark);
echo PHP_EOL;
var_dump($mark);

echo PHP_EOL;
$mark=9.55555555555535; //character length 16 and decimal 14 

echo $mark;
echo PHP_EOL;
echo getType($mark);
echo PHP_EOL;
var_dump($mark);

?>