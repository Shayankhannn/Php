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

// password hashing --- 


$pwdSignup = "kroissing";

password_hash($pwdSignup, PASSWORD_DEFAULT); // this one is default you dont have to worry about if any changes happen in php 
$options = [
    'cost' => 12,
];
$hashedpwd = password_hash($pwdSignup, PASSWORD_BCRYPT,$options); // this one is rn generally use in default but it is recommended to use bcrypt 

// .. when user login again 


$pwdLogin = "kroissing";

password_verify($pwdLogin,$hashedpwd);

if(password_verify($pwdLogin,$hashedpwd)){
echo "they are the same login";
}else{
    echo"try again";
};