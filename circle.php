<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">radius:</label><br>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

$radius = $_POST["radius"];

$circumfrence = null;
$area = null;
$volume = null;

$circumfrence = 2 * pi() * $radius;

$circumfrence = round($circumfrence,2);

$area = pi() * pow($radius,2) ;
$area = round($area,2);

$volume = 4/3 * pi() * pow($radius,3);

$volume = round($volume,2);

echo "circumfrence equal $circumfrence <br>";
echo "area equal $area <br>";
echo "volume equal $volume";








?>