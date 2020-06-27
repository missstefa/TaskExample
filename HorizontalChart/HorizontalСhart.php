<?php
function play($number, $rollDie)
{
    $arr = [];
    $arr[0] = "1|";
    $arr[1] = "2|";
    $arr[2] = "3|";
    $arr[3] = "4|";
    $arr[4] = "5|";
    $arr[5] = "6|";

    for ($i = 0; $i < $number; $i++) {
        $rand = $rollDie();
        if ($rand == 1) {
            $arr[0] .= "#";
        } elseif ($rand == 2) {
            $arr[1] .= "#";
        } elseif ($rand == 3) {
            $arr[2] .= "#";
        } elseif ($rand === 4) {
            $arr[3] .= "#";
        } elseif ($rand == 5) {
            $arr[4] .= "#";
        } elseif ($rand == 6) {
            $arr[5] .= "#";
        }
    }

    foreach ($arr as &$item) {
        $count = iconv_strlen($item) - 2;
        if ($count == 0) {
            continue;
        } else {
            $item .= " $count";
        }
    }
    echo implode("\n", $arr);
}

