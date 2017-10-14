<?php

$file=fopen('1.txt','w');
$line = fputs($file,'hello'.PHP_EOL);
flock($file,LOCK_EX);
$line2 =fputs($file, 'world'.PHP_EOL);
flock($file,LOCK_UN);
fclose($file);
var_dump($file);

//$file= fopen('1.txt', 'r');
//$content = fread($file,6);
//fclose($file);
//echo $file;
