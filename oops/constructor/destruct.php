<?php
class Test{
	public $a;
	public function __construct(){
		
		echo"called constructor autometically.\n";
		$this->a=10;
	}
    public function wish(){
		echo"Good Morning....\n";
	}
	public function __destruct(){
		
		echo"called destructor autometically.\n";
		unset($this->a);
		$this->show_a();
	}
	public function show_a(){
		
		echo"The value of a after descructor called :".$this->a;
	}
}
$test=new Test();
echo $test->a;
$test->wish();
echo $test->a;

?>