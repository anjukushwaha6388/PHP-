<?php
//wap in php to show method channing
class Test{
	public function a(){
		echo "a is called \n";
		return $this; //return $ths is instance
	}
	public function b(){
		
		echo "b is called \n";
		return $this;
	}
	public function c(){
		
		echo "c is called \n";
		return $this;
	}
	public function d(){
		
		echo "d is called \n";
		return $this;
	}
}
$test=new Test();
$test->a();
$test->b();
$test->c();
$test->d();
$test->a()->b()->c()->d();  //
?>