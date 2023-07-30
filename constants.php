<?php 
$max_with = 980;  // variable 

define("MAX_WIDTH", 980); //definiing constants  no dolar sign ,and using special function


echo "Value of constants: ". MAX_WIDTH . "<br/>" ; // echo the constants  

echo "Can't cnahge the value <br/>";
//MAX_WIDTH =MAX_WIDTH+1;

echo "Can't even redefine it <br/>";
define("MAX_WIDTH",981);
echo MAX_WIDTH;



?>