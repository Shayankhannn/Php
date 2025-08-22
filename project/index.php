<?php 
   require_once 'includes/session_config.inc.php';
   require_once 'includes/signup_view.inc.php';
   require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="user">
    <h3>

        <?php output_username() ?>
    </h3>
    <?php 

        if(isset($_SESSION["user_id"])){
            echo '<form action="includes/logout.inc.php" method="POST" class="form-box">
         
            <h2>LogOut</h2>
            
            <button type="submit">LogOut</button>
        </form>
 ';
        }

    ?>

        
</div>
<div class="container">
    <?php if(!isset($_SESSION["user_id"])){ ?>
<div class="auth-container">
    <div class="form-wrapper">
        <!-- Login Form -->
   <form action="includes/login.inc.php" method="POST" class="form-box">
                       <div class="errors">
        <?php 
check_login_errors(); 
?>

</div>
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="username" >
                <label>Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="pwd" >
                <label>Password</label>
            </div>
            <button type="submit">Login</button>
        </form>


     

        <!-- Signup Form -->
        <form action="includes/signup.inc.php" method="POST" class="form-box">
            <h2>Sign Up</h2>
                   <div class="errors">
        <?php 
check_signup_errors();
?>
</div>
            <?php
            signup_inputs();
            ?>
            <button type="submit" >Sign Up</button>
     
        </form>
        
    </div>
</div>
<?php } ?>

</div>

</body>
</html>
