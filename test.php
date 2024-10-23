<?php


function foo($i) {
    if($i < 0) {
        return ;
    } 
    echo "begin : " . $i . "\n";
    foo($i - 1);
    echo "end : " . $i . "\n";
}
foo(3);