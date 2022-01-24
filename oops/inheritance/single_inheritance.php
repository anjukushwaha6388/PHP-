<?php
//wap i php to show single inheriotance

class papa{
	public function bike(){
		
		echo"Bike running \n";
	}
}
class beta extends papa{
	public function cycle(){
		
		echo"cycle running \n";
	}
}
$papa=new papa();
$papa->bike();
$beta=new beta();
$beta->cycle();
$beta->bike();

?>