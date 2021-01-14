<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//run fat free
$f3->run();