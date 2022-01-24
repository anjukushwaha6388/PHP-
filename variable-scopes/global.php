<?php
//wap in php to show super variable

$GLOBALS['A'] = 100;
$GLOBALS['B'] = 200;
function display()
{
	echo $GLOBALS['A'];
	echo"\n";
	echo $GLOBALS['B'];
	echo"\n";
	
	$A=$GLOBALS['A'];
	$B=$GLOBALS['B'];
	
	echo $A;
	echo"\n";
	echo $B;
	echo"\n";
	
	/*global $A,$B;
	echo $A;
	echo"\n";
	echo $B;
	echo"\n";*/
	extract($GLOBALS);
	echo $A;
	echo"\n";
	echo $B;
	echo"\n";
}

display();

?>