<?php
function ipToInt($ip)
{
    $a = explode(".", $ip);
    return $intip = $a[0] * 256 * 256 * 256 + $a[1] * 256 * 256 + $a[2] * 256 + $a[3];
}

function intToIp($intip)
{
    $d[0] = (int)($intip / 256 / 256 / 256);
    $d[1] = (int)(($intip - $d[0] * 256 * 256 * 256) / 256 / 256);
    $d[2] = (int)(($intip - $d[0] * 256 * 256 * 256 - $d[1] * 256 * 256) / 256);
    $d[3] = $intip - $d[0] * 256 * 256 * 256 - $d[1] * 256 * 256 - $d[2] * 256;
    $ip = "$d[0].$d[1].$d[2].$d[3]";
    return $ip;
}