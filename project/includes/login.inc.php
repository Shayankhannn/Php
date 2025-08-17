<?php



if($_SERVER["REQUEST_METHOD"] === "POST"){

  $username =  $_POST["username"];  
   $pwd =  $_POST["pwd"];

   try {
      require_once 'dbh.inc.php';
      require_once 'model_model.inc.php';
      require_once 'login_controller.inc.php';
   
        $errors = [];

      if (is_input_empty($username,$pwd, $email)) {
         $errors["empty_input"] = "Fill In All Field!" ;
      };

      require_once 'session_config.inc.php' ;

         if($errors){
            $_SESSION["errors_signup"] = $errors;
            $signupData = [
               "username" => $username,
               "email" => $email,
               
            ];


            $_SESSION["signup_data"] = $signupData;


            header("Location: ../index.php");
            die();
         };



   } catch (PDOException $e) {
    die("query failed--:" . $e->getMessage());
   }
}else{
    header("Location : ../index.php");
    die();
}