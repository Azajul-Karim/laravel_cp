<?php 
//Encalpsulation
function shout($msg,$times = 5){
    echo str_repeat( $msg . "\n", $times);
}

//  shout('hello world!', );

//Php Built in functions

$string = 'hello world'; 

//String Length
echo strlen($string) . "\n";  

//String First Character capital
echo ucfirst($string) . "\n";

//String All Words First Character capital
echo ucwords($string) . "\n";

//String All Character capital
echo strtoupper($string) . "\n";

//String All Character small
echo strtolower($string) . "\n";

//String Count
echo str_word_count($string) . "\n";

//Explode
$tags = "php, programming, web development";

print_r(
    explode(',', $tags)
);


//Implode & Join
$tags = ['php', 'programming', 'web development'];

echo join(" | ", $tags) . "\n";

//Number Format
$number = 123456789.12345;

echo number_format($number, 2) . "\n";

//Date & Time
echo "Current Date: " . date('Y-m-d') . "\n";

//Function Named Arguments

function calculateTotalCost(float $price, int $quantity, float $discount = 0.13): float {
    
    $total = $price * $quantity;
    $total -= $discount;
    return $total;
}

echo calculateTotalCost(10, 5) . "\n";