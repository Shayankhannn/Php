<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="username" require >
        <input type="email" name="email" placeholder="email" require >
        <input type="password" name="password" placeholder="password" require >
    <button>Signup</button>
    </form>
</body>
</html>