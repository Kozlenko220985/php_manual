<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 14:18
 * Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.
 */

for ($i = 200; $i <= 400; $i++) {
    $count = 0;
    for ($a = 202; $a < $i; $a++) {
        if ($i % $a == 0) {
            $count++;
        }
    }
    if ($count == 0) {
        echo "$i простое число <br>";
        break;
    }
}