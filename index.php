<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//debugger
$f3->set('DEBUG',3);

//Define a default route
$f3->route('GET /', function()
{
   $view = new Template();
   echo $view->render('Views/home2.html');


});

//Run fat free
$f3->run();
