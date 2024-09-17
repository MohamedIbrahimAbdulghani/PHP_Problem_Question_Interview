<?php


$a = '1';
$b = &$a;  // change reference and value a and b when you make override 
$b = "2$b";
echo $a . ", " . $b;


