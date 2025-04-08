<?php

//  echo 10+10;

echo "Shaurya is Learning php <br>"; 
echo "Hello bro I am Learing PHP <br>";

$honey = 90;

$kallu = 10;

echo $kallu*$honey;


echo "<br>";
echo "<br>";




const fruits = [1,2,3,4,5,6,7,8883,77888];




// function billu($array, $target){
// for($i = 0 ; $i<array.count; i++;){
//     if(target === array[$i]){
//         echo "Taget finded".array[$i];
//     };
// } ;

// };

function billu($array, $target) {
    for ($i = 0; $i < count($array); $i++) {
        if ($target === $array[$i]) {
            echo "Target found: " . $array[$i];
            return;
        }
    }
}




billu(fruits,8883);






