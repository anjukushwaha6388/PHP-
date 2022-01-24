<?php

//wap in php to show here doc string synatx

$a=100;
echo <<<'BLOCK'

This is Here Doc String, $a \n
   "This is again New Line of String "$a" " 
 
  'This string is inside $a single Qoute \t tabbed' = $a

BLOCK;


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
//use in variable store 

$html = <<<'ANJU'

This is Here Doc String, $a \n
   "This is again New Line of String "$a" " 
 
  'This string is inside $a single Qoute \t tabbed' = $aS

ANJU;

echo $html;

?>