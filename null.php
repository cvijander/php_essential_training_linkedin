<?php 

$var1 = null; // null 
$var2 = "";   // empty string 


echo "Var1 null ? ". is_null($var1). "<br/>";
echo "Var 2 null? " .is_null($var2). "<br/>";
echo "Var3 null ? " .is_null($var3) . "<br/>";

echo "<br/>";
echo "Does variables have somethnig inside.. <br/>";
echo "Var1 is set " . isset($var1). "<br/>";
echo "Var2 is set " . isset($var2). "<br/>";
echo "Var3 is set " . isset($var3) . "<br/>";

echo"<br/>";
// empty : "", null, 0 , 0.0, "0", false, array()

$var3 = "0";
echo "Var1 is empty ?" .empty($var1). "<br/>";
echo "Var2 is empty ? " .empty($var2) . "<br/>";
echo "Var3 is empty ? " .empty($var3) . "<br/>";



?>