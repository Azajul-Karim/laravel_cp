<?php
//closure
$years = [2002, 2003, 2004, 2005, 2006, 2007];

function incrementYears($year)
{
    return $year += 10;
}

$updateYears = array_map('incrementYears', $years);  
print_r($updateYears);



$chat = function ($message) {
    echo $message;
};

$chat('Hello World! ');
echo "\n"; 



function greet($name, $customGreeting)
{
    echo "Hello, $name";
    $customGreeting();
}


greet("Topu", function (){
  $time = date('h:i');

  echo "Have A Great Day It's {$time}";
});

