<?php

//print_r(argv);
$sum=0;
$avg=0;
for($i=1;$i<$argc;$i++)
{

$sum=$sum+$argv[$i];
$avg=$sum/($argc-1);
}
printf("The sum =%d\n ",$sum);
printf("The avg = %d\n ",$avg);

?>