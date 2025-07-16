<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">X:</label><br>
    <input type="text" name="x">
    <label for="">Y:</label><br>
    <input type="text" name="y">
    <label for="">Z:</label><br>
    <input type="text" name="z">
    <input type="submit" value="submit">
    </form>
</body>
</html>



<?php


$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

$total = null;

// absolute -- return absolute value 

// $total = abs($x);

// round func 
// $total = round($x);

// floor -- round down
$total = floor($x);

// ceil -- always round 
// $total = ceil($x);

//  power of 
// $total = pow($x,$y);

// square root 

// $total = sqrt($x);

// max -- maximum number

// $total = max($x,$y,$z);

// min -- minimum number 

// $total = min($x,$y,$z);

// pi --- pi value 

$total = pi();

// random -- complete random upto 2 billion 

$total = rand(1,45);


echo $total;















?>