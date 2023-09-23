#!/usr/bin/php

<?php
class Utility
{
  public static function getAlphaCount($inputString): int
  {
    $chars = str_split($inputString);
    $count = 0;

    foreach ($chars as $char) {
      if (ctype_alpha($char)) {
        $count++;
      }
    }
    return $count;
  }
}
