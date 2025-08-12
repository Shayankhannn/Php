<?php


$sensitiveData = "kroissing";

$salt = bin2hex(random_bytes(16));
$pepper = "AsecretpepperString";

echo "<br>" . $salt;
$datatoHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256",$datatoHash);

echo "<br>" . $hash;



// ............ 
echo " <br>";

$sensitiveData = "kroissing";
$storedsalt = $salt;
$storedhash = $hash;

$pepper = "AsecretpepperString";

$datatoHash = $sensitiveData . $storedsalt . $pepper;

$verifyinghash = hash("sha256",$datatoHash);

if($storedhash === $verifyinghash){
    echo "matched" . "<br>";
    echo $storedhash . "<br>";
    echo $verifyinghash . "<br>";

}else{
    "data didnt matched";
}

// you can use above method when you want to hash finance related or email or like this

