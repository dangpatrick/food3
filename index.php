<?php
/*
 * Name Patrick Dang
 * Date: 1/28/2021
 * Filename: index.php
 * Description: Controller page for food3 practice - creating an order form
 */

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the auto autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

//Define a default route (home page)
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define an order1 route
$f3->route('GET /order', function(){
    echo "Order 1st route!";
});

//Define an order2 route
$f3->route('GET /order2', function(){
    echo "Order 2nd route!";
});

//Define an summary route
$f3->route('GET /summary', function(){
    echo "Summary route!";
});



//Run fat free
$f3->run();