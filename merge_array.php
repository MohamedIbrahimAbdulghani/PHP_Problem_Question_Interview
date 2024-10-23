<?php


// echo "<pre>";
// print_r(array_merge(["1", "2"], ["one", "two"]));



/******   this is function to implement array_merge */

function arrayMerge($array1, $array2) {
    $result = [];
    for($i = 0; $i < count($array1); $i++):
        $result[] = $array1[$i];
    endfor;
    for($y = 0; $y < count($array2); $y++):
        $result[] = $array2[$y];
    endfor;
    return $result;
}
echo "<pre>";
print_r(arrayMerge([1, 2], ["one", "two"])) ;