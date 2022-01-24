<?php
//wap in php to show nullable datatype

$x=null;  
echo PHP_EOL;
var_dump(($x));
 //it does not exits at_all
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));
var_dump($x==null);
var_dump($x===null);
var_dump(''==null);
var_dump(''===null);



?>