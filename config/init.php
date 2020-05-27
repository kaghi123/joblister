<?php
//session start
session_start();

//config file
require_once 'config.php';

//include helpers
require_once 'helpers/system-helper.php';

//auto loader
function __autoload($class_name){
    require_once 'lib/' .$class_name. '.php';
}