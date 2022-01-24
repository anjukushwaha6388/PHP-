<?php

//wap in php to show here doc string synatx

$a=100;
echo <<<ANJU

This is Here Doc String, $a \n
   "This is again New Line of String "$a" " 
 
  'This string is inside $a single Qoute \t tabbed' = $a

ANJU;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
//use in variable store 

$html = <<<ANJU

This is Here Doc String, $a \n
   "This is again New Line of String "$a" " 
 
  'This string is inside $a single Qoute \t tabbed' = $a

ANJU;

echo $html;

// use in " " processed string

$a=100;
echo <<<"AB"
This is Here Doc String, $a \n
   "This is again New Line of String "$a" " 
 
  'This string is inside $a single Qoute \t tabbed' = $a

AB;
?>