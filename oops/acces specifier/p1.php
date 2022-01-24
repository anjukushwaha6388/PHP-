<?php
// public modifier
//contains remains same for ,methods
class Tatoo{
	public $location='hand';	
	public function __construct(){
		echo"Acces by mindi within the class \n";
	}
}
class Parents{
	public function __construct(){
		//echo"Acess by".__CLASS__." outside the scopes of class{$this->location}\n";
	}
}
class Friends{
	public function __construct(){
		
	}
}
class Hushband{
	public function __construct(){
		
	}
}
$tatoo=new Tatoo();
echo"Acess from outside the scopes of class{$tatoo->location}\n";

?>