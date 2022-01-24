<?php
//wap in php to show setter and getter
//setter----method
//getter----method
class Test{
public $a=10; #var public
public $b=20; #var public
var $c=30;    #var public
public function setValue($a,$b,$c){
	$this->a=$a;
	$this->b=$b;
	$this->c=$c;
}
public function getValue(){
	echo"The value of a from getter  ={$this->a} \n";
	echo"The value of b from getter  ={$this->b}\n";
	echo"The value of c from getter  ={$this->c}\n";
}
}
$test=new Test();
echo"the value of number a before setter = {$test->a}\n";
echo"the value of number b before setter = {$test->b}\n";
echo"the value of number c before setter = {$test->c}\n";
$test->setValue(100,200,300);//setter
echo"the value of number a after setter = {$test->a}\n";
echo"the value of number b after setter = {$test->b}\n";
echo"the value of number c after setter = {$test->c}\n";
$test->getValue();//getter

?>