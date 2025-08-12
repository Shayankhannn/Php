<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="auth-container">
    <div class="form-wrapper">
        <!-- Login Form -->
        <form action="login.inc.php" method="POST" class="form-box">
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="pwd" required>
                <label>Password</label>
            </div>
            <button type="submit">Login</button>
        </form>

        <!-- Signup Form -->
        <form action="signup.inc.php" method="POST" class="form-box">
            <h2>Sign Up</h2>
            <div class="input-group">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="input-group">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-group">
                <input type="password" name="pwd" required>
                <label>Password</label>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>

</body>
</html>
