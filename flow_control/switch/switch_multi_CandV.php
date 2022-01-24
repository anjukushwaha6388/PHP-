<?php
//wap in php to show consonants and vowels

$x=readline("Enter the character : ");
(getType($x=='string') and strlen($x)==1) and ctype_alpha($x) ? : exit('invalid Value Supplied.');

 $output='';
 switch($x) //total alpha=26  ,vowel=5=>{a,e,i,o,u}  ,consonent=21
 {
	 case 'a':
	 case 'A':
	 $output='vowel';
	 break;
	 case 'e':
	 case 'E':
	 $output='vowel';
	 break;
	 case 'i':
	 case 'I':
	 $output='vowel';
	 break;
	 case 'o':
	 case 'O':
	 $output='vowel';
	 break;
	 case 'u':
	 case 'U':
	 $output='vowel';
	 break;
	 
	 default:
	 $output='consonant';
	 break;
	 
 }
 echo $output;
?>