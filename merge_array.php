<?php




// print_r(array_merge($array1, $array2));

function arrayMerge($array1, $array2) {
    $result = [];
    for($i = 0; $i < count($array1); $i++):
        $result[] = $array1[$i];
    endfor;
    for($y = 0; $y < count($array2); $y++):
        $result[] .= $array2[$y];
    endfor;
    return $result;
}

echo "<pre>";
print_r(arrayMerge([1, 2], ["one", "two"])) ;