<?php
//wap in php to show boolean false stored in variables

$x=false;
echo $x;//nothing
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(false)
echo json_encode($x);
echo PHP_EOL;

echo PHP_EOL;
echo 'On comparing all the three values';
echo(false==FALSE);
echo PHP_EOL;
echo(False==FALSE);
echo PHP_EOL;
echo(0==false);
echo PHP_EOL;
var_dump(0==false);
echo PHP_EOL;
var_dump(1==FALSE); // type is optional and content match //php is dynamic conversion
echo PHP_EOL;
var_dump(0==(int)false);//implict type-----php is dynamic conversion
echo PHP_EOL;
var_dump(0===false); //  content match and type match=false
?>