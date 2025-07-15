<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- method="get" -->
    <!-- <form action="index.php" method="post">
    <label for="">UserName:</label><br>
    <input type="text" name="username"/><br>
    <label for="">Password:</label><br>
    <input type="password" name="password"/><br>
    <button type="submit">Log in</button>
</form> -->

    <form action="index.php" method="get">
        <label for="">Quantity</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" name="total" value="submit">
    </form>

</body> 
</html>



<?php

// echo $_GET["username"] . "<br>";
// echo $_GET["password"];

// echo $_POST["username"] . "<br>";
// echo $_POST["password"];

$item = "Pizza";

$price = 5.98;

$quantity = $_GET["quantity"];
$total = null;

$total = $price * $quantity;

echo"You have ordered $quantity x $item <br>";
echo "Your total is $total";










?>