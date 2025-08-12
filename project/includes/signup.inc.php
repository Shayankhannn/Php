<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){

   $username =  $_POST["username"]; 
   $email =  $_POST["email"]; 
   $pwd =  $_POST["pwd"];
   
   try {
    //code...
   } catch (PDOException $e) {
    die("query failed--:" . $e->getMessage());
   }

}else{
     header("Location: ../index.php");
     die(); 
};