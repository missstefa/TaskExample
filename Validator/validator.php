<?php
function isHex($str)
{
    $string = str_replace(":", "", $str);
    return ctype_xdigit($string);
}

function isFourDigit($str)
{
    $arr = explode(":", $str);
    foreach ($arr as $item) {
        if(strlen($item) <= 4) {
            return true;
        }
    }
}


function isValidIPv6($str)
{
    if ($str == 1) {
        return true;
    } else {
        return false;
    }
}