<?php
//wap in php to show class and object
class Tv{
	public $color="black";
	public $size="56 inch";
	public $price=25000;
	public $type="LED";
	public $company="LG";
	
	public function info(){
		
		echo"The color :{$this->color}\n";
		echo"The size :{$this->size}\n";
		echo"The price :{$this->price} \n";
		echo"The type :{$this->type} \n";
		echo"The company :{$this->company} \n";
	}
	public function on(){
		echo"Tv on \n";
	}
	public function off(){
		echo"Tv off \n";
	}
	public function volup(){
		echo"volum ++ \n";
	}
	public function voldown(){
		echo"volum -- \n";
	}
}
echo"Anonymous object accessing : \n ";
(new Tv)->info();  //anonymous object
(new Tv)->volup();
(new Tv)->voldown();
(new Tv)->on();
(new Tv)->off();
echo"Reference object accessing1 : \n ";
$remote1=new Tv;  //reference object
$remote1->info(); //reference object
$remote1->volup(); //reference object
$remote1->voldown();  //reference object
$remote1->on();  //reference object
$remote1->off();  //reference object

echo"Reference object accessing 2:\n ";
//multiple object accesing
$remote2=new Tv;  //reference object
$remote2->info(); //reference object
$remote2->volup(); //reference object
$remote2->voldown();  //reference object
$remote2->on();  //reference object
$remote2->off();  //reference object
?>