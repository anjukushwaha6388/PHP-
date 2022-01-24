<?php
//wap in php to make non-case-dsensitive use-define-constants

error_reporting(E_USER_DEPRECATED);

define('gravity',10,true);
echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;

?>