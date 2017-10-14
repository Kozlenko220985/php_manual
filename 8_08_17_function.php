<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 17:21
 * Функция котороая будет строить меню
 * 1 фунция меню
 * 2 li элементы
 * 3 ссылку a
 */

$arr = [
    'one',
    'two' => [
        1 => 3,
        2 => '123'
    ],
    ['three', 'wert']
];

function myFunc(array $arr, $i = 0)
{

    foreach ($arr as $item) {
        if (is_array($item)) {
            $i += myFunc($item, 1);
        } else {
            $i++;
        }
    }
    return $i;
}


echo myFunc($arr);