<?php
//wap in php to show non-parametried constructor
class Test{
	public function __construct(){
		echo"constructer running....\n";
	}
   
}
$test=new Test();
$test1=new Test();
$test->__construct();
$test1->__construct();



?>