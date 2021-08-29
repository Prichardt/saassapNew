<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

include 'settings.php';

define('BASIC_CLASS',ROOT.DS.'library/');

spl_autoload_register('libraryClass');

function libraryClass($class){
    if(is_file(BASIC_CLASS.$class.".php")){
        require BASIC_CLASS.$class.".php";
    }
}