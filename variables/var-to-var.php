<?php
//wap in php to show var-to-var-reference

$x='10'; //normal varaible
echo $x;
echo PHP_EOL;

$y='ravi';
$ravi='500';
echo $ravi;
echo PHP_EOL;

$z='chaman';
$$z='1000';
echo $chaman;
echo PHP_EOL;
echo $z;

echo PHP_EOL;
echo PHP_EOL;

$w='_100';
$$w='king';
echo $w;
echo PHP_EOL;
echo $$w;
echo PHP_EOL;
echo $_100;


echo PHP_EOL;
echo PHP_EOL;
$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;

echo PHP_EOL;
echo PHP_EOL;

?>