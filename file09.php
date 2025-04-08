<!-- If conditional Statement  -->

<?php

$age = 20;

if($age <= 12){
    echo "you cannot paly any game one";
}else if($age > 12 && $age <=15 ){
    echo "you can play mario";
}else if($age > 15 && $age < 18){
    echo "you can play pubg for 3 hours";
}else{
   echo "<h1>you can play pubg </h1> ";
}




