<?php

//session_start();

setcookie('hello_world', 'value of coolie', time() + 1000 *60);

var_dump($_COOKIE);
?>