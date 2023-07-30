<?php 

$numbers = array(8,23,15,42,16,4);

//count
echo "Count: " . count($numbers) . "<br/>";
// Max value

echo "Max value: " . max($numbers). "<br/>";

// Min value

echo "Min value: " .min($numbers) ."<br/ >";

// sort 
echo "Sorting numbers  " ."<br/>"; 
sort($numbers) . "<br/>";
echo "<pre>". "<br/>" ;
echo print_r($numbers). "<br/>";
echo "</pre>" ."<br/>";

//reverse sort 
echo "Reverse sort: ". "<br/>";
rsort($numbers) . "<br/>";
echo "<pre>". "<br/>" ;
echo print_r($numbers). "<br/>";
echo "</pre>" ."<br/>";

// implode 
$num_string = implode(" * ", $numbers);
echo "Imploding " .$num_string. "<br/>";

//explode 
echo "Explode :" . print_r((explode(" * ",$num_string)))."<br/>";

// 15 in array 
echo "15 in array " .in_array(15, $numbers). "<br/>";

// 19 in array
echo "19 in array " . in_array(19,$numbers) . "<br/>";


?>