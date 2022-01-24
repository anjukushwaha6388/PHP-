<?PHP
class Test{
Public function __construct($a){

echo 'Constructor is called autometicaly ';
echo PHP_EOL;
return $a+100;

}
$test=new Test(200);
//$test=new Test;
//echo $test;   //Implicity called and cannot be returned
$x = $test->__construct(200);  //explicitly called as method can bereturned
echo $x;
}
?>