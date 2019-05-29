<?php
$directory = basename(dirname(dirname(__FILE__)));
$url = $_SERVER['REQUEST_URI'];
$url = explode($directory, $_SERVER['REQUEST_URI']);
if(count($url) == 1){
    define('WEBROOT', '/');
} else {
define('WEBROOT', $url[0] .'minimal-portfolio/');
}