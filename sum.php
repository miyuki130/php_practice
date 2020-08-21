<?php

function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);