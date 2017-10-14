<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 14:11
 * Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3

 */
$arr = [];
for ($i=1;$i<=10;$i++){
    $arr[]= $i;
}

var_dump($arr);
echo '<hr>';

foreach ($arr as $item){
    if ($item % 3 ==0){
        echo "$item делиться на 3 <br>";
    }else{
        echo "$item не делиться на 3 <br>";
    }
}
