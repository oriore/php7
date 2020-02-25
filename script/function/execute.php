<?php
$values = [1, 2, 3, 4, 5];

$test_array = array_map(function ($value) {
    return $value + 1;
}, $values);

// fn([引数]) => [returnされる値]
$test_array2  = array_map(
    fn($value) => $value + 1
, $values);

// test_arrayとtest_array2で同じ値が入っている
var_dump($test_array);
var_dump($test_array2);