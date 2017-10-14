<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.08.2017
 * Time: 21:17
 */



for ($i = 1; $i <= 10; $i++) {
    $count = 0;
    for ($a = 2; $a < $i; $a++) {
        if ($i % $a == 0) $count++;
    }
    if ($count == 0) {
        echo "<pre>";
        echo "$i Prostoe";
        echo "</pre>";
    }
}

