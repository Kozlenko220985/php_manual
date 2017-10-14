<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 13:19
 **/
$arr = [
    ['Username' => 'Laki', 'email' => 'Laki85@mail.ru', 'message' => 'hello Laki'],
    ['Username' => 'Mary', 'email' => 'Mary88@mail.ru', 'message' => 'hello Mery'],
    ['Username' => 'Vagan', 'email' => 'Vagan85@mail.ru', 'message' => 'hello Vagan'],
];

$serialArr = serialize($arr);
echo $serialArr;

$arr2 = unserialize($serialArr);
var_dump($arr2);
