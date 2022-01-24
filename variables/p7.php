<?php

//wap in php to nullable and empty
 $x='';
 var_dump($x); 
 echo PHP_EOL;
 var_dump($x);
 echo PHP_EOL;
 var_dump($x=='');
 echo PHP_EOL;
 var_dump($x=="");
  echo PHP_EOL;
 var_dump($x==='');
 echo PHP_EOL;
 var_dump($x==="");
  echo PHP_EOL;
 var_dump(empty($x));
 echo PHP_EOL;
 var_dump(empty(''));
  echo PHP_EOL;
 var_dump(empty(""));
 $y="";
 var_dump($y);
 var_dump($x==$y);
  echo PHP_EOL;
  var_dump($x===$y);
  echo PHP_EOL;
 var_dump(''==' ');
 var_dump(''===' ');
 echo strlen('');
 echo PHP_EOL; 
 echo strlen(' ');
 
?>