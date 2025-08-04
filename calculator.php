<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="display: flex; align-items: center; justify-content: center; ">
    <h1 style="font-size: 40px; font-weight: 600;">Calculator Using PHP</h1>
</div>

<div style="display: flex; align-items: center; justify-content: center; background-color: #c6f6ffff;" >
    <form action="calculator.php" method="post">
        <div style="margin-bottom: 30px;">
            <h3><?php  ?></h3>
        </div>
        <div>
            <input type="text" placeholder="first number" name="num1">
        </div>
        <div>
            <select name="operater" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
        </div>
        <div>
            <input type="text" placeholder="second number" name="num2">
        </div>
        <div>
            <input type="submit" name="submit" value="calculate">
        </div>
    </form>
</div>

</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $operater = $_GET["operater"];
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if(is_numeric($num1) && is_numeric($num2)){
 switch ($operater) {
    case '+':
       $result =   $num1 + $num2;
        break;
    case '-':
       $result =  $num1 - $num2;
        break;
    case '*':
       $result =  $num1 * $num2;
        break;
    case '/':
       $result = ($num2 != 0) ?  $num1 / $num2 : "cannot divide by zero";
        break;
    
    default:
        $resullt =  "unusual thing happen 😒";
        break;
};
};
}else{
    $result = "Please enter valid number";
};





?>