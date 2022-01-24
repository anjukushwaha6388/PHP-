/<?php
//convert the array key and value varaible reference

echo "With using varaible to varaible";
$student['name']='anju';
$student['class']='Diploma';

foreach($student as $key=>$value)
{

$$key=$value;
printf("%s : %s \n",$key,$value);

}

echo $name;
echo PHP_EOL;
echo $class;

echo PHP_EOL;
echo PHP_EOL;

echo 'Without using varaible to varaible extract()';
echo PHP_EOL;
$car['name']='Maruti';
$car['class']='A Class';
$car['price']='5.5 Lakhs';
printf("The name of car :%s \n",$car['name']);
printf("The class of car :%s \n",$car['class']);
printf("The price of car :%s \n",$car['price']);

extract($car);//decration in foreach concept 

printf("The name of car :%s \n",$name);
printf("The class of car :%s \n",$class);
printf("The price of car :%s \n",$price);

?>