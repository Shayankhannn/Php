<?php
session_start();

$_SESSION["username"] = 'kroissing'; // it will remember it through out the website

// unset($_SESSION["username"]); // this will delete this session data 
// session_unset(); // this will delete all session data 

// session_destroy();

// echo $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION["username"]; ?>
</body>
</html>