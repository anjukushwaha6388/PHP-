<?php
//wap in php to show magic constants: __FUNCTION__ and __CLASS__
class Tv{
	public function Display(){
	echo"Calling from Method \n";
	echo"Called from display method  from Class : ".__CLASS__."=".__METHOD__."\n";
	echo"Called from display  from Class : ".__CLASS__.":".__FUNCTION__."\n";
	echo"The method name for Class Tv =  : ".__CLASS__."::".__FUNCTION__."\n";
	var_dump((__CLASS__.'::'.__FUNCTION__)==__METHOD__);
	}
	
}
 function Display(){
	 echo"Calling from Function \n";
	echo"Called from display method : ".__METHOD__."\n";
	echo"Called from display function : ".__FUNCTION__."\n";
	}
Display();
$class=new Tv();
$class->Display();
?>