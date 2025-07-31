<?php


echo $_SERVER["DOCUMENT_ROOT"] . "<br>";
echo $_SERVER["PHP_SELF"] . "<br>";
echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["REQUEST_METHOD"] . "<br>";
echo $_GET["name"] . "<br>";
echo $_REQUEST["name"] . "<br>";
echo $_FILES["name"] . "<br>"; // get dagta of file uploaded to websigte
echo $_COOKIE["name"] . "<br>";
$_SESSION["username"] = "DAni";
echo $_SESSION["username"] . "<br>";
echo $_ENV["username"] . "<br>";




// form related

var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = htmlspecialchars($_POST["name"]); // sanitize code
    // htmlentities() -- same as htmlspecial char but it take all sort of char and convert it to html entities

    header("Location: ../index.php");

};
if(empty($firstName)){
    exit();
    header("Location: ../index.php");
}














?>