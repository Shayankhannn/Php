<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'Classes/Car.php';

$car = new Car("audi","red") ;

echo $car->vehicleType;
echo $car->getBrand();
echo $car->setBrand("ferrari");
echo $car->getcarinfo();


?>
</body>
</html>