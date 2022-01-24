<?php
//wap in php to show setter and getter
class User{
	
	public $name;
	public $cls;
	public $rollno;
	public $sub=[];
	public function create($name,$cls,$rollno,$sub){
		//setter
		$this->name=$name;
		$this->cls=$cls;
		$this->rollno=$rollno;
		$this->sub=$sub;
	}
	public function getName(){  //getter
		return $this->name;
	}
	public function getClass(){   //getter
		return $this->cls;
	}
	public function getRollno(){
		return $this->rollno;      //getter
	}
	public function getSub(){
		return $this->sub;         //getter
	}
	public function userInfo(){           //method
	echo "User Name : {$this->name} \n";
	echo "User Class : {$this->cls} \n";
	echo "User RollNo : {$this->rollno} \n";
	echo "User Subject :".implode(',',$this->sub)."\n";
	}
	
}
$user=new User();  //reference object
$user->create('Anju','Diploma','06',['Php','java','Python','C++']);
echo"User name from getter {$user->getName()} \n";
echo"User class from getter {$user->getClass()} \n";
echo"User Roll no from getter {$user->getRollno()} \n";
echo"User Subject no from getter : ".implode(',',$user->getSub())." \n";
$user->userInfo();

?>