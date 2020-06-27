<?php
//Реализуйте функцию sumIntervals, которая принимает на вход массив интервалов и возвращает сумму всех длин интервалов. В данной задаче используются только интервалы целых чисел от -100 до 100 , которые представлены в виде массива. Первое значение интервала всегда будет меньше, чем второе значение. Например, длина интервала [-100, 0] равна 100, а длина интервала [5, 5] равна 0. Пересекающиеся интервалы должны учитываться только один раз.
//
//Примеры
//<?php
//
//sumIntervals([[5, 5]]); // 0
//
//sumIntervals([[-100, 0]]); // 100
//
//sumIntervals([
//    [1, 2],
//    [11, 12]
//]); // 2
//
//sumIntervals([
//    [2, 7],
//    [6, 6]
//]); // 5
//
//sumIntervals([
//    [1, 9],
//    [7, 12],
//    [3, 4]
//]); // 11
//
//sumIntervals([
//    [1, 5],
//    [-10, 19],
//    [1, 7],
//    [16, 100],
//    [5, 11]
//]); // 110

function sumIntervals($arr)
{
    $size = 0;
    $size2 = 0;
    $newArr = [];

    if (count($arr) == 1) {
        return (max($arr[0]) - min($arr[0]));
    }

    foreach ($arr as $key => $value) {
        if ($key == 0) {
            $newArr = $value;
        } else {
            if ($value[0] <= max($newArr) && $value[1] >= min($newArr)) {
                $newArr = array_merge($value, $newArr);
            } else {
                $size2 += (max($value) - min($value));
            }
        }
    }

    $size += (max($newArr) - min($newArr));
    return ($size + $size2);
}