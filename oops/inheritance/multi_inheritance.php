<?php
//wap i php to show Multi Level inheriotance
//in php  mutiple inheritance is not directly supported
//but we want it,to implement 1.traits 2.interfaces

class baba{
	public function car(){
		
		echo"Car running \n";
	}
}
class papa extends baba{
	public function bike(){
		
		echo"Bike running \n";
	}
}
class beta extends papa{
	public function cycle(){
		
		echo"cycle running \n";
	}
}
$baba=new baba();
$baba->car();

$papa=new papa();
$papa->bike();
$papa->car();

$beta=new beta();
$beta->cycle();
$beta->bike();
$beta->car();

?>