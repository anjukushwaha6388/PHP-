<?php
//wap in php to show, difference between raw and processed in the combination;

//escape character sequence;

#echo '''';
#echo """";
echo 'The line is \n single tabbed and "\t double" tabbed.';
echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tabbed.";
echo PHP_EOL;

//with variablee
echo PHP_EOL;
$a=100;
echo 'The value of $a is : "$a" ';
echo PHP_EOL;
// ${a} //ginger technic or  string interpulation or coplex technic
echo "The value of \$a is : '$a' ";			//print a $a then /$a

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo 'The value of $a is : '.$a;
echo PHP_EOL;
echo 'The value of $a is : " '.$a.'"';
echo PHP_EOL;
echo 'The value of $a is : '." '$a' ";

?>