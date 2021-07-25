<?php

const COUNT = 10000;
const MIN = 1;
const MAX = 50000;

function quickSort(array $mas): array
{
    $arrCount = count($mas);

    if ($arrCount <= 1) {
        return $mas;
    }

    $base = $mas[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $arrCount; $i++) {

        if ($base >= $mas[$i]) {
            $left[] = $mas[$i];
        } else {
            $right[] = $mas[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, [$base], $right);
}


function _randArray($count, $minRand, $maxRand): array
{
    if ($count != COUNT && $count > $maxRand - $minRand) {
        $minRand = 1;
        $maxRand = $count * 3;
    }
    $myArray = [];
    for ($i = 0; $i < $count; $i++) {
        do {
            $num = mt_rand($minRand, $maxRand);
        } while (in_array($num, $myArray));
        $myArray[] = $num;
    }
    return $myArray;
}


function getSortRandArray($count = COUNT, $minRand = MIN, $maxRand = MAX)
{
    return quickSort(_randArray($count, $minRand, $maxRand));
}

$arr = getSortRandArray();
$num = 1234;

function LinearSearch($myArray, $num): ?string
{
    $n = 0;
    $count = count($myArray);

    for ($i = 0; $i < $count; $i++) {
        $n++;
        if ($myArray[$i] == $num) return 'Number ' . $num . ' found in ' . $n . ' steps.' . PHP_EOL;
    }
    return 'Number ' . $num . ' not found in ' . $n . ' steps' . PHP_EOL;
}

echo LinearSearch($arr, $num);

function binarySearch($myArray, $num)
{
    $n = 0;

    $left = 0;
    $right = count($myArray) - 1;

    while ($left <= $right) {

        $middle = floor(($right + $left) / 2);
        if ($myArray[$middle] == $num) {
            $n++;
            return 'Number ' . $num . ' found in ' . $n . ' steps.' . PHP_EOL;
        } elseif ($myArray[$middle] > $num) {
            $n++;
            $right = $middle - 1;
        } elseif ($myArray[$middle] < $num) {
            $n++;
            $left = $middle + 1;
        }
    }
    return 'Number ' . $num . ' not found in ' . $n . ' steps' . PHP_EOL;
}

echo binarySearch($arr, $num);

function InterpolationSearch($myArray, $num)
{
    $n = 0;
    $start = 0;
    $last = count($myArray) - 1;

    while (($start <= $last) && ($num >= $myArray[$start])
        && ($num <= $myArray[$last])
    ) {

        $pos = floor($start + (
                (($last - $start) / ($myArray[$last] - $myArray[$start]))
                * ($num - $myArray[$start])));
        if ($myArray[$pos] == $num) {
            $n++;
            return 'Number ' . $num . ' found in ' . $n . ' steps.' . PHP_EOL;
        }

        if ($myArray[$pos] < $num) {
            $n++;
            $start = $pos + 1;
        } else {
            $n++;
            $last = $pos - 1;
        }
    }
    return 'Number ' . $num . ' not found in ' . $n . ' steps' . PHP_EOL;
}

echo InterpolationSearch($arr, $num);