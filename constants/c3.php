<?php

//wap in php to show case sensitive constants

define('gravity',10); 			//lowercase
define('GRAVITY',9.8);  		//uppercase
define('Gravity','free fall');		//Capatalise
define('GrAvIty','This is gravity');		//mixed

echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAvIty;
echo PHP_EOL;

?>