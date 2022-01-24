<?php
//wap in php to show class and object in php

class Tv{
	var $model='XL TV';  //default or public modifier
	var $type='LED';
	var $price=5000;
	var $color='Black';
	var $varient='Curved';
	
	public function showInformation()
	{
		echo"The Model for ".__CLASS__. "{$this->model} \n";
		echo"The Model for ".__CLASS__. "{$this->type} \n";
		echo"The Model for ".__CLASS__. "{$this->price} \n";
		echo"The Model for ".__CLASS__. "{$this->color} \n";
		echo"The Model for ".__CLASS__. "{$this->varient} \n";
	}
	function volume()
	{
		echo"volume up .";	
	}
}
$tv=new Tv();  //object
$tv->showInformation();  //public method calling or function calling
echo"The tv volume will be ";
echo"{$tv->volume()}";

?>