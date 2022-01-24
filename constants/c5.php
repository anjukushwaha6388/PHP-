<?php

//wap in php to show re-declaration error in constants

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY',9.8);
echo GRAVITY;

echo PHP_EOL;
//redefine

printf("the value of predefined constant true : %d \n",TRUE); //E_NOTICE
define('TRUE','yes');
printf("the value of predefined constant true : %d \n",TRUE);

echo PHP_EOL;

printf("the value of user-defined constant gravity : %d \n",gravity); 
define('gravity','9.8');
printf("the value of user-defined constant gravity : %d \n",gravity); //E_USER_NOTICE

?>