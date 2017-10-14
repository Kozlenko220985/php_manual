<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.08.2017
 * Time: 20:03
 */

$arr = [
    ['title' => 'news', 'logo' => 1],
    ['title' => 'logos', 'logo' => 2],
    ['title' => 'fghr', 'logo' => 33]
];

function my($arr)
{
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            my($v);
        } else {
            echo '<pre>';
            echo $k . ':' . $v;
            echo '</pre>';
//
        }
    }
}

//$arr2 = [];
//$arr2 = my($arr);
my($arr);

//var_dump($arr2);
