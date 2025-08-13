<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){

   $username =  $_POST["username"]; 
   $email =  $_POST["email"]; 
   $pwd =  $_POST["pwd"];
   
   try {
    // first come connectiona then model then controller in a situation if we need view it comes in between model and controller
      require_once 'dbh.inc.php';
      require_once 'signup_model.inc.php';
      require_once 'signup_controller.inc.php';

      

      if (is_input_empty($username,$pwd, $email)) {
         # code...
      }
      if (is_email_valid( $email)) {
         # code...
      }
      if (is_username_taken( $pdo , $username)) {
         # code...
      }
      if (is_email_registered( $pdo , $email)) {
         # code...
      }
      

   } catch (PDOException $e) {
    die("query failed--:" . $e->getMessage());
   }

}else{
     header("Location: ../index.php");
     die(); 
};