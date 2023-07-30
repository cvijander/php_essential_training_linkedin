<?php 

$count ="2 cats ";
echo "Value count is: " . gettype($count)."<br/>";

$count +=3;
echo "After adding number 3 to string 2 now it is : <br/>";
echo "Value count is: " . gettype($count)."<br/>";

echo $cats = "I have " .$count . " cats. "."<br/>";
echo "Cats : " .gettype($cats). "<br/>";

echo "<br/>";

echo "Type casting :<br/>";
settype($count,"integer");
echo "Count variable : " .gettype($count). "<br/>";

$count2 = (string) $count;
echo "Count: " .gettype($count) . "<br/>";
echo "Count2 :" .gettype($count2) . "<br/>";


$test1 =3; 
$test2 = 3;
settype($test1,"string");
(string)$test2; 

echo "Test1 " .gettype($test1)."<br/>";
echo "Test2 " . gettype($test2). "<br/>";









?>