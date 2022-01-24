<?php
//is relationship
class A{
public function ktm_bike(){

echo"This is a  KTM bike...\n";
}
}
class B{
public function cycle(){
echo"This is a  cycle...\n";
}

public function ktm_bike(){
$a=new A();
$a->ktm_bike();
}

}
$a=new A();
$a->ktm_bike();

$b=new B();
$b->cycle();
//$b->ktm_bike();

?>