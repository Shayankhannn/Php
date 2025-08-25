<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

   $username =  $_POST["username"];
   $pwd =  $_POST["pwd"];

   require_once 'dbh.php';
   require_once 'Signup.php';


   $signup = new Signup($username,$pwd);


}else{
    header("Location: ../index.php");
}