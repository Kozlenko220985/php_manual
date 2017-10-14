<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 13:26
 */
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr [] = $i;
}

var_dump($arr);
foreach ($arr as $item) {
    if ($item % 2 == 0) {
        echo "$item делиться на два <br>";
    }
}

echo '<hr>';

$a = rand(1, 10);
$b = rand(1, 10);

$res = ($a < $b) ? "переменная b больше a: $b" : "переменная A больше B: $a";
echo $a . '<br>';
echo $b . '<br>';
echo $res;