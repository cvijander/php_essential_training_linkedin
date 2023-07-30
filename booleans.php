<?php 

$result1 =  true;
$result2 = false;

echo $result1 . "<br/>";
echo $result2 . "<br/>";

echo "Result is boolean ?" . is_bool($result2). "<br/>";

$number =3.14;
if(is_float($number)){
    echo "It is a float.";
}



?>