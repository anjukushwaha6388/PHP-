 <?php
#echo gettype($_REQUEST);
# print_r($_REQUEST); # superGlobal variable in php
$name=$_REQUEST['name'];
//echo $name;
//hey welcome Mr.mukesh
//printf("hii welcome Mr. %s",$name);
echo "hii welcome ! Mr.".$name;
?>