<?php
declare(strict_types=1);  // strict mode

(int) $age = '10';
// var_dump($age + 10);  // int(20)

function calcAge(int $birthYear, string $name) {
    echo "Hay $name, you are " . (2023 - $birthYear) . " years old.";
}

calcAge(1999, "Topu");  // 24