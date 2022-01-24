<?php

//wap in php to show total pre defined constant in php

$count=count(get_defined_constants());
printf("The toatal Constant =%d",$count);

print_r(get_defined_constants());
?>