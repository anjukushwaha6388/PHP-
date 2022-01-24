<?php
$hindi=$_REQUEST['hindi'];
$eng=$_REQUEST['eng'];
$mathes=$_REQUEST['mathes'];
$sc=$_REQUEST['science'];
$ss=$_REQUEST['ss'];
$tmarks=$hindi+$eng+$mathes+$sc+$ss;
$per=($tmarks/500)*100;
echo"Made by Anju Maurya ";
echo"</br>";
echo"</br>";
echo"Total Marks= 500";
echo"</br>";
echo"Obtained Marks= ".$tmarks;
echo"</br>";
echo"Total Persentage is = ".$per;
?>