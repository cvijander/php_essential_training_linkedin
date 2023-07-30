<?php 

$assoc = array("first_name" => "Kevin", "last_name" =>"Skoglund");

echo "First name: " .$assoc["first_name"]."<br/>";

echo "Last name: " .$assoc["last_name"] . "<br/>";

$assoc["first_name"] = "Larry";
echo "Changing first name <br />";
echo "First name: " .$assoc["first_name"]."<br/>";
echo "First and last name " .$assoc["first_name"] . " " . $assoc["last_name"]. "<br/>" ;

$numbers = array(4,8,15,16,23,42);
$numbers = array(0=>4, 1=>8, 2=>15, 3=> 16, 4 =>23, 5=> 42);

echo "<pre>" . "<br/>";
print_r($numbers);
echo "</pre>"."<br/>"




?>