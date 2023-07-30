<?php 

echo "Float: ". $float = 3.14;

echo "Float +7 : ". $float + 7 ."<br />";

echo "Divide numbers: 4 / 3 = " . 4/3 ."<br/>";

// echo "Divide by zero : ". 4/0 . "<br/ >";  error 

echo "Round round with decimals : " . round($float, 1) . "<br/>";

echo "Ceiling round up: ". ceil($float) . "<br />";

echo "Floor round lower number: " .floor($float) . "<br />";


$integer =3;

echo "Is {$integer} integer?  " . is_int($integer). "<br />";
echo "Is {$float} integer ?" . is_int($float) . "<br />";

echo "Is {$float} float ? " . is_float($float) . "<br />";
echo "Is {$integer} float ? " . is_float($integer) . "<br />";

echo "Is {$float} numeric? " . is_numeric($float) . "<br />";
echo "is {$integer} numeric " .is_numeric($integer) . "<br />";
?>