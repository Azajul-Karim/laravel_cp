<?php
$userAge = "25";

$minimumAge = 18;

if($userAge >= $minimumAge) {
    echo "Vote Accepted.";
} else {
    echo "Sorry, you are not eligible to vote.";
}
echo "\n";

//Convertion Value to Boolean

$name = "Topu";
var_dump((bool) $name);  

$str = "0";
var_dump((bool) $str);

$number = 0;
var_dump((bool) $number);

//Convertion Value to Integer

$cart = "200 Tesla Cars";
var_dump((int) $cart);

$isAdmin = true;
var_dump((int) $isAdmin);

$float = 10.5;
var_dump((int) $float);

$nomalStr = "Hello World";
var_dump((int) $nomalStr);  

$stringWithNumber = "50 Shades of Grey";
var_dump((int) $stringWithNumber);

//Convertion Value to Float
$price = 100.50;
var_dump((float) $price);

//Convertion Value to String
$stock = 100;
var_dump((string) $stock);

$isAdmin = true;
var_dump((string) $isAdmin);

$array = [1,2,3];
var_dump((string) $array);

//Convertion Value to Array
$number = 100;
var_dump((array) $number);

$float = 10.5;
var_dump((array) $float);

$fruit = "Apple";
print_r((array) $fruit);

//Convertion Value to Object  
$number = 100;
var_dump((object) $number);

$fruit = "Apple";
var_dump((object) $fruit);


  

