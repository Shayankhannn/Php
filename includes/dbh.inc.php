<!-- in pure php file we dont close php tag to save ourself from creating more damage by accidently writing below the closing tag  -->

<?php
// dsn -- database source name
$dsn = "mysql:host=localhost;dbname=php";
$dbusername = "root";
$dbpassword = "";

// three ways of connection 

// mysql connection -- never do it -- security things
// mysqli connection -- you can use it means mysql improve -- very good for mysql databases 
// pdo connection -- php data object -- more flexible with databases out there 

 try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
    echo "failed connection:" . $e->getMessage();
 } 
 










