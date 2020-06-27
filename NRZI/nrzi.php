<?php
function decode(string $str)
{
    $signals = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

    if (empty($signals) || count($signals) == 1) {
        return '';
    }

    $result = '';
    foreach ($signals as $k => $signal) {
        if ($signal === '|') {
            if ($signals[$k + 1] == '¯' || $signals[$k + 1] == '_') {
                $result .= '1';
            }
        } else {
            if ($k == 0) {
                $result .= '0';
            } elseif ($signals[$k - 1] == "|") {
                continue;
            } else {
                $result .= '0';
            }
        }
    }
    return $result;
}