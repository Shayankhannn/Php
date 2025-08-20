<?php
declare(strict_types=1);


function output_username(){
if(isset($_SESSION["user_id"])){
    echo "You are Logged In as " . $_SESSION["user_username"];
}else{
    echo "You are not Logged In";
}
};

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];
        echo "<br";
        foreach ($errors as $error) {
             echo '<p >' . $error . '</p>';
        }
        unset($_SESSION["errors_login"]);
    }elseif(isset($_GET["login"]) && $_GET["login"] === "success"){
        
        echo "<br>";
        echo "<p style='color: rgba(60, 255, 76, 1);'> Login Success  </p>";
    }

};