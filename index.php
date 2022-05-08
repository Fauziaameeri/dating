<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {


    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /personal-info', function () {
   // echo "personal info";

    $view = new Template();
    echo $view->render('views/personal-info.html');
});

$f3->route('POST /profile', function () {
    //echo "profile";

    $view = new Template();
    echo $view->render('views/profile.html');
});

$f3->route('POST /interests', function () {
    //echo "interest";

    $view = new Template();
    echo $view->render('views/interests.html');
});

$f3->route('POST /summary', function () {
    //echo "summary";

    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3->run();