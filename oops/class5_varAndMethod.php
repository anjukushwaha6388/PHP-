<?php
//wap in php to show variables and methods in php
//any function inside class becomes method
class Test{
	var $a=10;  //insatnce var
	var $b=20;
	
	function add(){
		$a=100;  //local var  //stack
		$b=200;  //local var //stack
		echo $a+$b;
		echo"\n This is a add function\n ";
		//$test=new Test;  //local var
		echo $this->a+$this->b;
		//$this -->only point to the current class inside
		//$this --->stack memory
	
	}
}
//$test -->only point to the outside class $test object
//$test :stack but new test : heap memory
$test=new Test;
$test->add();
?>