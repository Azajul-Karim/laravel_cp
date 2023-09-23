#!/usr/bin/php
<?php

require_once("Utility.php");

if ($argc < 2) {

  exit("Please provide an String.\n");
}

printf("Total Alphabets in the string: %d\n", Utility::getAlphaCount($argv[1]));
