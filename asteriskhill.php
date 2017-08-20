#!/usr/bin/env php
<?php

error_reporting(false);

$n = $ne = isset($argv[1]) ? $argv[1] : 5;

if(!intval($ne) || $ne < 1) {
    echo "Usage: asteriskhill.php [height]\n";
    echo "height can be any integer above 0\n";
    exit(1);
}

for($i = 0; $i < $ne; $i++) {
  for($j = 0; $j < $n; $j++)
    echo " ";
  for($j = 0; $j <= $i; $j++)
    echo "*";
  echo "\n";
  $n--;
}
