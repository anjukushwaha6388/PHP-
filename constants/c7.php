<?php
//wap in php to show ,difference b/w predefined error level and use defined error level
error_reporting(E_NOTICE);
printf("The value of true :%d \n",true);
printf("The value of TRUE :%d \n",TRUE);
printf("The value of Incase-sensitive constant :%d \n",(TRUE==1));
define('true',10,1);
printf("The value of after redeclaration constant :%d \n",true);
?>