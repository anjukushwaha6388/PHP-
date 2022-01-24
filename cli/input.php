<?php
$fp=fopen('input.txt','r');
//or
//$fp=fopen('input.html','r');
//$fp=fopen('input.doc','r');
$txt=fgets($fp,1024);
//$txt=fgets($fp,5);
echo $txt;
?>
