<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usersearch = $_POST["search"];

    try {
        // include -- include file  but if cant find file give warning 
        // include_once -- does the same thing but also check if the file is already included if yes then throw warning 
        // require -- does the same thing bu instead of warning it will throw error
        // require_once --  same  

        require_once "includes/dbh.inc.php";

        
        $query = "SELECT * FROM comments WHERE username = :usersearch;"; 
        

        $stmt = $pdo->prepare($query );
        $stmt->bindParam(":usersearch",$usersearch);

         $stmt->execute();
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        
        $pdo= null;
        $stmt = null;

        // header("Location: ../index.php");

        

    } catch (PDOException $e) {
        die("query failed:----" . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h3>Search Results</h3>
    <?php  
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no results</p>";
            echo "</div>";
        }else{
            var_dump($results); 
        }
    
    ?>

</head>
<body>
    
</body>
</html>