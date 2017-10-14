<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.08.2017
 * Time: 14:25
 */

$arr = [
    ['title' => 'news', 'logo' => 1],
    ['title' => 'logos', 'logo' => 2],
    ['title' => 'fghr', 'logo' => 33]
];

function my($arr){

    $myArr = [];
    foreach ($arr as $k => $item){
        if (is_array($item)){
            my($item);
        }else{
            echo "ключ : $k значение : $item <br>";
            $myArr[$k] = $item;
        }
    }
    return $myArr;
}

my($arr);

var_dump(my(... $arr));

