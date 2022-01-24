<?php
$n1=readline("enter the n1 :");
$n2=readline("enter the n2 :");
//echo add($n1,$n2);

function add($a=0,$b=0)
{
	return $a+$b;
}
printf("The result is 0 argument = %d \n",add());
printf("The result is 1 argument $n1 = %d \n",add($n1));
printf("The result is 1 argument $n1 = %d \n",add($n2));
printf("The result is 2 argument $n1 and $n2 = %d \n",add($n1,$n2));
?>