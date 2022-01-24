<?php    
//wap in php to check a array is homogenenous or hetrogenous
//wap in php to show argv is always homogenous

function is_homo($array=[])
{
$key_type=getType($array[0]);
//echo $key_type;
for($i=0;$i<count($array);$i++)
{
//echo getType($array[$i]);
echo PHP_EOL;
if($key_type===getType($array[$i]))
{
}
else{
return false;   //hetropgenous
}
}
return true;    //homogenous


}
var_dump(is_homo(["anju",10,30.6,40]));
var_dump(is_homo(["anju","vinita","shiwani","neha"]));
var_dump(is_homo([10,45,56,69]));
//var_dump(is_homo($argv)); //input the value in command..........//always homogenous array 
?>