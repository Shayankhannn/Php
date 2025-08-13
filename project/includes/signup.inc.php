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

      $errors = [];

      if (is_input_empty($username,$pwd, $email)) {
         $errors["empty_input"] = "Fill In All Field!" ;
      };
      if (is_email_valid( $email)) {
         
         $errors["invalid_email"] = "Email Is Invalid!" ;
      };
      if (is_username_taken( $pdo , $username)) {
         $errors["username_taken"] = "This Username is already Taken!" ;
         
      };
      if (is_email_registered( $pdo , $email)) {
         $errors["email_registered"] = "This Email is already Registered!" ;
         
      };

      require_once 'session_config.inc.php' ;

         if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
         };

   } catch (PDOException $e) {
    die("query failed--:" . $e->getMessage());
   }

}else{
     header("Location: ../index.php");
     die(); 
};