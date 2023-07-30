<?php 

$first ="The quick brown fox";
$second=" jumpd over the lazy dog";

$third = $first;
$third .=$second;
// concatination , appending first and second in third 

echo $third."<br/>";

?>

<?php
//Lowercase 
echo "Lowercase: ".strtolower($third)."<br/>";
//Uppercase 
echo "Uppercase: ".strtoupper($third)."<br/>";
//upercase first 
echo "Uppercase first: ". ucfirst($third)."<br />";
// upercase words
echo "Uppercase words: ".ucwords($third)."<br/>";

//length 
echo "Length: ".strlen($third)."<br />";
// trim
echo "Trim: " ."A".trim(" B C D ")."E"."<br />";
// find
echo "Find: " .strstr($third,"brown")."<br />";

// replace by string 
echo "Replace by string: ".str_replace("quick","super-fast",$third)."<br />";

// repeat
echo "Repeat: ".str_repeat($third,2)."<br />";
// make substring 
echo "Make substring: ".substr($third,5,10)."<br/>";
// find position 
echo "Find position: ".strpos($third,"brown")."<br />";
// find character 
echo "Find character:" .strchr($third,"z")."<br />";
?>