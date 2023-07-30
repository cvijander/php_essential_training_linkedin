<?php 
$var1 = 3;
$var2 = 4;

echo"Basic Math:";
echo (( 1 + 2 + $var1 ) * $var2)/ 2 - 5 ."<br />";

//Absolute value:
echo "Absolute value: ". abs(0-300)."<br/>";
//Exponential
echo "Exponential ".pow(2,8)."<br/>";
//Square root
 echo "Square root: ".sqrt(100). "<br />";
//Modulo
 echo "Modulo: ".fmod(20,7). "<br/>";
//Random 
 echo "Random: " .rand()."<br/>";
// Random (min, max)
echo "Random (min,max): ".rand(1,10). "<br/ >";

// increment
echo "Var2: ".$var2."<br/>";
$var2 +=4 ;
echo "Var2 after adding 4  += : ".$var2 . "<br/>";
$var2 -= 2;
echo "Var2 after removing 2  -=: ".$var2 . "<br/>";
$var2 *= 2;
echo "Var2 after multiplying 2   *=: ".$var2 . "<br/>";
$var2 /=3;
echo "Var2 after division by 3   /=: ".$var2 ."<br/>";

echo $var2."<br/>";
// increment
echo "Increment: ++ " .$var2++."<br />";
echo "Var2: " .$var2 ."<br/ >";
// decrement 
echo "Decrement -- : " .$var2--. "<br/>" ;
echo "Var2: " .$var2 . "<br/>";

echo 1 + "1" . "<br />";
//echo 1 + "2 houses" . "<br />";  this is going to work but with an error !


?>