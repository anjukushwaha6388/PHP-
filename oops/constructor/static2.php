<?php
//wap in php to show without static keyword
function increments(){

Static $i=0;
echo"Before incrementiong";
echo $i."\n";
$i++;
echo"After incrementiong ";
echo $i."\n";

}
increments();
increments();
increments();
increments();

?>