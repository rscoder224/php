<!-- Call Back Functions -->


<?php

function test(){
    echo "Test Function Called";
}

$test = "test";

function main($a){
    $a();
}
main($test);



function hello(){
    echo "Hello bro how are you";
}

$hello = "hello";


function hei($s){
    $s();
    $s();
    $s();
    $s();
    $s();
    $s();
}

hei($hello)


?>