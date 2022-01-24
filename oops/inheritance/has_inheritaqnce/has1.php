<?php
//has relationwship
class A{
public function ktm_bike(){

echo"This is a  KTM bike...\n";
}
}
class B extends A{
public function cycle(){
echo"This is a  cycle...\n";
}
}
$a=new A();
$a->ktm_bike();

$b=new B();
$b->cycle();
$b->ktm_bike();

?>