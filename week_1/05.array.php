<?php
$friends = array(
    'Topu',
    'Rakib',
    'Sakib',
    'Azajul Karim'
);

print_r($friends); 

echo $friends[3] . " ". $friends[0];  

//Associative array

$friends = array(
    'Topu' => 24,
    'Rakib' => 25,
    'Sakib' => 26,
    'Azajul Karim' => 27
);

print_r($friends);

//Array Manupulation
$name = ['Topu', 'Rakib', 'Sakib', 'Azajul Karim', 'Topu'];
//Count
echo count($name);
echo "\n";
//Sort
// sort($name);
// print_r($name);

//Array Search
echo array_search('Topu', $name); 

//Array Reverse
$reversed = array_reverse($name);
print_r($reversed);

//Array Unique
$unique = array_unique($name);
print_r($unique);

//Array Value
Print_r(array_values($friends));

//Array Slice
print_r(array_slice($name, 2, 2));

//Array Shift
print_r(array_shift($name));

//Array Pop
print_r(array_pop($name));

//Array Push
array_push($name, 'Topu');
