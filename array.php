<?php 

$numbers = array(4,8,15,16,23,42);

echo "Second item is  index 1: ". $numbers[1]. "<br />";

$mixed  =array(6, "fox","dog", array("x","y","z"));

echo "From mixed ". $mixed[2] ."<br/>";
echo "From mixed " . $mixed[3] . "<br/>";
echo "From mixed " . $mixed[3][1] . "<br/>";

echo "<pre><br/>";
echo print_r($mixed). "<br/>";
echo "<pre/><br/>";


$mixed[2] ="cat";
$mixed[4] = "mouse";
$mixed[] = "horse";

echo "<pre><br/>";
echo print_r($mixed). "<br/>";
echo "<pre/><br/>";








?>