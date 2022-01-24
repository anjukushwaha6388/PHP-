<?php
//wap in php to show parametried constructor
class Test{
	public function __construct($name,$roll){
		echo $name;
		echo $roll;
	}
   
}
$test=new Test('Ravi',6);


?>