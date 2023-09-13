#!/usr/bin/php
<?php

$str = readline("Enter a string: ");

$string = preg_replace('/[^a-zA-Z]/', '', $str);

$length = strlen($string);

printf("The string contains %d characters.\n", $length);


?>
