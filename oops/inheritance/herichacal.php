<?php
//wap i php to show Herichacal inheriotance
class papa{
	public function scooty(){
		
		echo"Scooty running \n";
	}
}
class beta extends papa{
	public function bike(){
		
		echo"bike running \n";
	}	
}
class beti extends papa{
	public function cycle(){
		
		echo"cycle running \n";
	}	
}

$papa=new papa();
$papa->scooty();

$beta=new beta();
$beta->bike();
$beta->scooty();

$beti=new beti();
$beti->cycle();
$beti->scooty();
?>