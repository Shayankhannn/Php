<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    // echo htmlspecialchars($username);

    try {
        // include -- include file  but if cant find file give warning 
        // include_once -- does the same thing but also check if the file is already included if yes then throw warning 
        // require -- does the same thing bu instead of warning it will throw error
        // require_once --  same  

        require_once "dbh.inc.php";

        // $query = "INSERT INTO users (username,pwd,email) VALUES (?,?,?);"; we can write ? as place holder and tehn like this
        // $stmt->execute([$username,$pwd,$email]); OR :
        
        $query = "INSERT INTO users (username,pwd,email) VALUES (:username,:pwd,:email);"; 
        
$options = [
    'cost' => 12,
];
$hashedpwd = password_hash($pwd, PASSWORD_BCRYPT,$options);

        $stmt = $pdo->prepare($query );
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":pwd",$hashedpwd);
        $stmt->bindParam(":email",$email);
         $stmt->execute();
        
        
        
        $pdo= null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("query failed" . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}