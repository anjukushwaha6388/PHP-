<?php
//wap in php to show fatal error 
//since we cannot re-declared the signature(or definiction )of //functuion in redclared
function test(){
echo"Hello from test 1 \n";
}
test();
//function redeclaration of test function 
function test(){
echo"Hello from test 1 \n ";
}
?>