<?php


$a = "Hello";
$b = "World";

$c = $a . " " . $b; // concatenate a and b


$a = 4;
$b = 4;
$c = 4;
$d = 4;


// and -- && 
if($a == $b and $c == $d){
    echo "this statement is true";
}

// or -- || 
if($a == $b or $c == $d){
    echo "this statement is true";
}


$result = match ($a) {
    1,3,6 => "variable a is equal to 1",
    4 => "variablea is equal to 4" ,
default => "none of this is true",
};

echo $result;










?>