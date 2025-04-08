<!-- Switch statement In Php -->


<?php

$fav_color = "yellow";

switch($fav_color){
    case "red" :
        echo "Stop Your vehicle on time";
        break;
        
    case  "yellow" :
    echo "Ready to move";
    break;
   case  "green":
    echo "Go ";

    default:
    echo "Invalid Color";
}

echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";

$day = 17;

switch($day){
    case 1 :
     echo "<h1>Monday </h1>";
     break;
    case 2 :
     echo "<h1> Tuesday </h1>";
     break;
    case 3 :
     echo "<h1>Wednesday </h1>";
     break;
    case 4:
     echo "<h1>Thursday </h1>";
     break;
    case 5 :
     echo "<h1>Friday </h1>";
     break;
    case 6 :
     echo "<h1>Saturday</h1>";
     break;
    case 7 :
     echo "<h1>Sunday</h1>";
    default :
    echo "<h1>Invalid Day</h1>";
}








