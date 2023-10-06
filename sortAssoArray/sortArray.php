<?php

$arr = array(
    "Sagar" => " 31",
    " Vicky" => "41",
    "Leena" => " 39",
    "Ramesh" => "40"
);

// sort by value 
print_r(asort($arr));
//sort by keys
print_r(ksort($arr));
// sort by value decending 
print_r(arsort($arr));
//sort by keys decending 
print_r(krsort($arr));

?>