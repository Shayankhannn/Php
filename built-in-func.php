<?php









$string = "hello World";

echo strlen($string) . "<br>"; // to know how long a string is

echo strpos($string,"o") . "<br>"; // tell us the position
echo str_replace("World","replaced",$string) . "<br>"; // replace thingds in string
echo strtolower($string) . "<br>"; // string to lowercase 
echo strtoupper($string) . "<br>"; // string to upper case 
echo substr($string,2,2) . "<br>"; // get a part of string if add -2 it wiill start from end 2,-2
print_r( explode(" ",$string)) . "<br>"; // explode a string into array based on first parameter like spaces

echo "<br>";
$num = -5.5;


echo abs($num) . "<br>";  // give a aabsolute value no matter negative or positive
echo round($num); // round to nearest number
echo pow(2,2);



















?>