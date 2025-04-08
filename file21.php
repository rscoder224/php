<!-- 10 basic But Important Functions in PHP -->

<?php

$name = "Shaurya Tiwari";
// to Calculate How many Charecters inside the String Available 
echo strlen($name);

// to Check DataType Of the Variable
echo var_dump($name);


echo "<br>";
echo "<br>";

// To Check Date 
echo date("d.m.y");



// this function Is used to check Version of PHP;
// echo phpinfo();


echo "<br>";
echo "<br>";


// is_string used to check this is a string or not if string return 1 eitherwise Nothing......................

$var = "hello";


echo is_string($var);


// to get particular portion of the String;
$kent = "Hello Bro I am Learning PHP";
echo substr($kent,14);



