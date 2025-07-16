<?php

// $age = 79 ;
// $adult = $age >= 18 && true ;

// if ($age >= 18 && $adult ) {
//     echo "you can enter";
// }elseif ($age <= 4) {
//     echo "please add valid number";
// }
// else {
//     echo "you must be 18+";
// }


$rate = 15 ;
$hours = 90;
$weeklyPay = null;

if ($hours <= 0) {
    $weeklyPay = 0;
}elseif ($hours <= 40) {
    $weeklyPay = $hours * $rate ;
}else {
    $weeklyPay = ($rate * 40) + (($hours - 40 ) * ($rate * 1.5)) ;
} 

echo "You made $$weeklyPay this week"






?>