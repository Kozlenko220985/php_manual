<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.08.2017
 * Time: 17:58
 */

$arr = [
    ['title' => 'Google', 'href' => 'https://www.google.com.ua'],
    ['title' => 'PHP Manual', 'href' => 'http://www.php.net'],
    ['title' => 'Bootstrap', 'href' => 'http://www.getbootstrap.com'],
    ['title' => 'HTML', 'href' => 'http://www.htmlbook.ru'],
    ['title' => 'Git', 'href' => 'http://www.git-scm.com']
];
/*
 * создает меню перебирая массив
 * ссоздает скелет navbar
 * создаю динамические ссылки перебирая массив
 *
 */
function createMenu(array $arr){


    echo "<nav class=\"navbar navbar-default \">";
    echo "<div class=\" navbar-header\">";
    echo "<a href=\"#\" class=\" navbar-brand\">Home</a>";
    echo "</div>";
    echo "<div class=\"collapse navbar-collapse navbar-ex1-collapse\">";
    echo "<ul class=\"nav navbar-nav \">";

    foreach ($arr as $v){
        echo "<li><a href=\"{$v['href']}\">{$v['title']} </a></li>";
    };

    echo "</ul>";
    echo "</div>";
    echo "</nav>";
};







