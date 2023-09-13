<?php
$name = "Topu";
echo $name;
echo "\n";

//Nameing convention
$name = "Topu";  // camelCase

$firstName = "Topu";  // camelCase

$first_name = "Topu";  // snake_case

//Variable Scope
//Global Scope

$age = 10;
function calcAge() {
    global $age;
    echo $age;
}
calcAge();  


//Variable Interpolation
$age = 10;

echo "I am $age years old.";
echo "\n";
