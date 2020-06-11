<?php
function rgbToHex($r, $g, $b)
{
    $arrayRgb = [];
    $arrayRgb[] = '#';
    (dechex($r) < 9) ? $arrayRgb[] = str_pad(dechex($r), 2, "0", STR_PAD_LEFT) : $arrayRgb[] = dechex($r);
    (dechex($g) < 9) ? $arrayRgb[] = str_pad(dechex($g), 2, "0", STR_PAD_LEFT) : $arrayRgb[] = dechex($g);
    (dechex($b) < 9) ? $arrayRgb[] = str_pad(dechex($b), 2, "0", STR_PAD_LEFT) : $arrayRgb[] = dechex($b);

    $result = implode($arrayRgb);
    return $result;
}

function hexToRgb($hex)
{
    $str = ltrim($hex, "#");
    $arr = str_split($str, 2);
    $arr1 = [];
    $arr1 ['r'] = hexdec($arr[0]);
    $arr1 ['g'] = hexdec($arr[1]);
    $arr1 ['b'] = hexdec($arr[2]);
    return $arr1;
}
