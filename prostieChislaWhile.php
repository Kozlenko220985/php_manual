<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 13:58
 */

$i = 1;
while ($i <= 10) {
    $i++;
    $count = 0;
    $b = 2;
    while ($b < $i) {
        if ($i % $b == 0) $count++;
        $b++;
    }
    if ($count == 0) echo "$i простое число <br>";
}