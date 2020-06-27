<?php
function summaryRanges($arr)
{
    $resultArr = [];
    $resultStr = "";
    $begin = 0;
    $end = 0;
    $interim = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] - $arr[$i - 1] == 1) {
            $interim[] = $arr[$i - 1];
            $interim[] = $arr[$i];
            if ($arr[count($arr) - 1] == $arr[$i]) {
                $interim[] = $arr[$i];
                $begin = min($interim);
                $end = max($interim);
                $interim = [];
                $resultStr = "{$begin}->{$end}";
                $resultArr[] = $resultStr;
            }
        } elseif (empty($interim)) {
            continue;
        } else {
            $begin = min(array_unique($interim));
            $end = max(array_unique($interim));
            $interim = [];
            $resultStr = "{$begin}->{$end}";
            $resultArr[] = $resultStr;
        }
    }
    return $resultArr;
}
