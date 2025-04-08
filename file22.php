<!-- Array in PHP -->

<?php

// Array is the collection of data .
// Store multiple Value in a single variable.


$users = ["Raju","Channu","Mannu","Mishra"];

echo $users[0];



for($user = 0; $user < count($users); $user++ ){
    echo $users[$user];
    echo "<br>";
}




