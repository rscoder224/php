<!-- Functions IN PHP -->
<?php

function hello(){
    echo "Hello bro I am learing PHP";
}

hello();
echo "<br>";
hello();
echo "<br>";
hello();
echo "<br>";
hello();



function addTwo($a,$b){
    echo $a+$b;
    echo "<br>";
}


addTwo(20,10);
addTwo(25,10);
addTwo(26,10);
addTwo(25,10);


function targetfinder($array,$target){
    for($i = 0; $i< count($array); $i++){
        if($array[$i]=== $target){
            return "Target $target finded at index $i <br>";
        }
    }return "Target Not Finded <br>";
}


const myArray = [1,2,3,4,55,66,78,89,99,100];



$ans = targetfinder(myArray,55);

echo $ans;


function usermaza($name,$color){
    return "<h1 style = 'color:$color;'> $name </h1> <br>";
}




$ans2 = usermaza("kallu is very bad boy While Ballu is bad than Kallu , Now You who is very Bad ","red");

echo $ans2;






