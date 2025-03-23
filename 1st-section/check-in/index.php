<?php

$name = "Dženan";
$money = 5000;

$business = [
    'name' => 'Auto Mechanic',
    'servicesCosts' => 20,
    'services' => [
        "Brakes Testing","Complete Service", "Engine Removal", "Oil Engine Change" 
    ]
];

// if($business['servicesCosts'] > 30) {
//     echo "<h3>Not interested in partnership.</h3>";
// } else {
//     echo "<h3>Interested in partnership.</h3>";
// }

// foreach($business['services'] as $service) {
//     echo $service . "<br/>";
// }

function register($user) {
    // Create the user record in the db.
    // Log them in.
    // Send a welcome email.
    // Redirect them to homepage.
}


include "index.view.php";