<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">Enter a country</label>
    <input type="text" name="country">
    <input type="submit" name="" value="submit" id="">
    </form>
</body>
</html>

<?php

$capital = $capitals[$_POST["country"]];

echo "the capital is $capital";


// an array mad eof key => value pairs

$capitals = array("usa" => "washington dc", "japan" => "kyoto", "korea" => "seol");

$capitals["usa"] = "las vegas";
$capitals["china"] = "beijing";
echo $capitals["usa"];

// array_pop -- remove last element 
// array_shift == remove first
$keys =  array_keys($capitals);

foreach ($keys as $key) {
    echo "$key";
};

// array_values($capitals); to get values 

// array_flip to filip array
// array_reverse to reverse order

echo count($capitals);


foreach ($capitals as $key => $value) {
    echo "$key = $value";
};



// isset  -- return true if variable is declared and not null

// empty ---  return true if variable is not declarred null or false or ""