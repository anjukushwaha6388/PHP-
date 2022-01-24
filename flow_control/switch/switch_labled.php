<?php
//wap in php to show inner labled blocks
$n=readline("enter the no B/w 1 to 9 : ");

switch($n)
{
	//php outer case block is not supported
	case 1:
	  {
      echo"case 1 is executing \n";
	  }
	case 2:
	  {
	  echo"case 2 is executing \n";
	  }
	case 3:
	  {
	  echo"case 3 is executing \n";
	  }
	case 4:
	  {
	echo"case 4 is executing \n";
	  }
	case 5:
	  {
	echo"case 5 is executing \n";
	  }
	case 6:
	  {
	echo"case 6 is executing \n";
	  }
	default:
	  {
	printf("default is executing");
	  }
}

//outer block is not supprted in php 

/*$n=readline("enter the no B/w 1 to 9 : ");

switch($n)
{
	{
	case 1:
	  {
      echo"case 1 is executing \n";
	  }
	} 
	{
	case 2:
	  {
	  echo"case 2 is executing \n";
	  }
	}
	{	
	case 3:
	  {
	  echo"case 3 is executing \n";
	  }
	} 
	{
    default:{
	printf("default is executing");
	}
	}
	
	*/
?>
