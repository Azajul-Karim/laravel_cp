<?php

//for loop
$rating = 3;

for ($i = 1; $i <=5; $i++) {

    echo ($i <= $rating) ? '★' : '☆';
}

echo "\n";


$officeEmployees = [
    'Sales' => ['Topu', 'Rakib', 'Rahim'],

    'Marketing' => ['Sakib', 'Musfiq', 'Tamim'],

    'HR' => ['Karim', 'Jannat', 'Rashid'],

    'Finance' => ['Jamal', 'Salim', 'Rahim'],
];

$departments = array_keys($officeEmployees);

for ($i = 0; $i < count($departments); $i++) {

    $department = $departments[$i];

    echo "Department: $department\n";

    $employees = $officeEmployees[$department];

    for ($j = 0; $j < count($employees); $j++) {

        $employee = $employees[$j];

        echo "Employee: $employee\n";
    }
}

echo "\n";


//while loop  
$validPassword = '1234';

$userInput = '';

while ($userInput !== $validPassword) {

    echo 'Enter Password: ';

    $userInput = readline("Enter The Password: ");
}

echo "Welcome To The System\n";

//do while loop
do{
  $email = readline("Enter Your Email: ");

  echo "Your Email Is: $email\n";

  $confirmation = readline("Confirm Your Email: ");

}while($confirmation !== 'yes');

//foreach loop
$names = ['Topu', 'Rakib', 'Rahim'];

foreach ($names as $name) {
  echo "$name\n";
}