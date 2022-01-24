<?php
printf("**************Start of global scope**************");
define('name','Anju Maurya');
printf("the value of name is : %s \n",name);
$bf="Nidhi Yadav";
printf("the value of Best friend is : %s \n",$bf);

function friend()
{
	printf("no one can sepreated name :%s \n",name);
	printf("no one can sepreated of best friend  :%s \n",$bf);
	
}

friend();

?>