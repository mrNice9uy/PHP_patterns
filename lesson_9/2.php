<?php

$array = [0, 1, 2, 3, 4, 4, 5, 6, 7, 8, 4, 9];

var_dump($array);

$element = 4;

foreach ($array as $key => $item) {
    if ($item == $element) {
        unset($array[$key]);
    }
}
var_dump($array);
