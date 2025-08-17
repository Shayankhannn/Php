<?php



if($_SERVER["REQUEST_METHOD"] === "POST"){

  $username =  $_POST["username"];  
   $pwd =  $_POST["pwd"];

   try {
      require_once 'dbh.inc.php';
      require_once 'model_model.inc.php';
      require_once 'login_controller.inc.php';
   
        $errors = [];

      if (is_input_empty($username,$pwd)) {
         $errors["empty_input"] = "Fill In All Field!" ;
      };

      $result = get_user($pdo,$username);

      if(is_username_wrong($result)){
         $errors["login_incorrect"] = "Incorrect Login info !";
      };
      if(!is_username_wrong($result) && is_password_wrong($pwd,$result["pwd"])){
         
         $errors["login_incorrect"] = "Incorrect Login info !";
      }

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
    header("Location : ../index.php");
    die();
}