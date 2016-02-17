<?php


session_cache_limiter(false);
session_start();

ini_set('display_errors','on');

define('INC_ROOT', dirname(_DIR_));

require INC_ROOT . '../vendor/autoload.php';



?>