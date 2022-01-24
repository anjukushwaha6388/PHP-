<?php
//wap in php to show magic constants:__FILE__ and  __DIR__
echo"this file path is : ".__FILE__."\n";
echo"this dir is : ".__DIR__."\n";
echo"Before folder path is  : ".dirname(dirname(__DIR__))."\n";

echo"before folder path is  : ".dirname(dirname(dirname(__DIR__)))."\n";
$laragon_path=dirname(dirname(dirname(__DIR__)));
echo"\n";
echo"Different path = ".$laragon_path."\\"."project"."\\";

?>