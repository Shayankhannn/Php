<?php
declare(strict_types=1);

function signup_inputs(){

         

            if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
                echo '          <div class="input-group">
                <input type="text" name="username"  value="'. htmlspecialchars($_SESSION["signup_data"]["username"]).'">
                <label>Username</label>
            </div>' ;
            }else{
                echo '          <div class="input-group">
                <input type="text" name="username" >
                <label>Username</label>
            </div>' ;
            }

            
            if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_registered"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
                echo '
            <div class="input-group">
                <input type="text" name="email" value="'. htmlspecialchars($_SESSION["signup_data"]["email"]) .'">
                <label>Email</label>
            </div>' ;
            }else{
                echo '     
            <div class="input-group">
                <input type="text" name="email" >
                <label>Email</label>
            </div>' ;
            }

             echo '<div class="input-group">
                <input type="password" name="pwd" >
                <label>Password</label>
            </div>';

          
            
};
function check_signup_errors(){

    if(isset($_SESSION["errors_signup"])){
            $errors = $_SESSION["errors_signup"];

            echo "<br>";

            foreach ($errors as $error ) {
                echo '<p >' . $error . '</p>';
             }

            unset($_SESSION["errors_signup"]);


    }elseif(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        unset($_SESSION["signup_data"]);
        echo "<br>";
        echo "<p style='color: rgba(60, 255, 76, 1);'> Signup Success  </p>";
    }

};