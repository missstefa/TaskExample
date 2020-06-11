<?php

function barChart($numbers)
{
    $size = (max($numbers) + abs(min($numbers)));
    //var_dump($size);
    $arr = array_fill(0, $size, '');
    //var_dump($arr);
    foreach ($numbers as $number) {
        //   var_dump($number);exit;
        if ($number > 0) {
            for ($i = 0; $i < $number; $i++) {
                $arr[max($numbers) - 1 - $i] .= "*";
            }

            for ($i = max($numbers); $i < count($arr); $i++) {
                $arr[$i] .= " ";
            }

            for ($i = max($numbers) - $number - 1; $i >= 0; $i--) {
                $arr[$i] .= " ";
            }

        } elseif ($number < 0) {
            for ($i = 0; $i < abs($number); $i++) {
                $arr[max($numbers) + $i] .= "#";
            }

            for ($i = max($numbers) + abs($number); $i < $size; $i++) {
                $arr[$i] .= " ";
            }

            for ($i = max($numbers) - 1; $i >= 0; $i--) {
                $arr[$i] .= " ";
            }

        } elseif ($number == 0) {
            for ($i = 0; $i < count($arr); $i++) {
                $arr[$i] .= " ";

            }
        }
    }
    print_r(implode("\n", $arr));
}
