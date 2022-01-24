<?php
//wap in php to show consonants and vowels

$x=readline("Enter the character : ");
(getType($x=='string') and strlen($x)==1) and ctype_alpha($x) ? : exit('invalid Value Supplied.');

 $output='';
 switch(strtolower($x)) //total alpha=26  ,vowel=5=>{a,e,i,o,u}  ,consonent=21
 {
	 case 'a':
	 $output='vowel';
	 break;
	 case 'e':
	 $output='vowel';
	 break;
	 case 'i':
	 $output='vowel';
	 break;
	 case 'o':
	 $output='vowel';
	 break;
	 case 'u':
	 $output='vowel';
	 break;
	 
	 default:
	 $output='consonant';
	 break;
	 
 }
 echo $output;
?>