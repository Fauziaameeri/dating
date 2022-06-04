<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();



//Require the autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');
require_once('model/validation-layer.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET|POST /', function () {


    $view = new Template();
    echo $view->render('views/home.html');
});

//views/personal- info route
$f3->route('GET|POST /personal', function ($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //first name
        $fname = $_POST['fName'];
        $f3->set('fname', $fname);
        $fname = "";
        if(isset($_POST['fName'])){
            $fname = $_POST['fName'];
        }

        //last name
        $lname = $_POST['lName'];
        $f3->set('lname', $lname);
        $lname = "";
        if(isset($_POST['lName'])){
            $lname = $_POST['lName'];
        }

        //age
        $age = $_POST['age'];
        $f3->set('age', $age);
        $age = "";
        if(isset($_POST['age'])){
            $age = $_POST['age'];
        }

        //phone
        $phone = $_POST['pNum'];
        $f3->set('phone', $phone);
        $phone = "";
        if(isset($_POST['pNum'])){
            $phone = $_POST['pNum'];
        }

        //validating all data
        if (validFirst($fname)) {
            // Store data in session
            $_SESSION['fName'] = $fname;
        } else {
            $f3->set('errors["fname"]', 'Please enter a valid first name at least 2 characters');
        }

        if (validLast($lname)) {
            $_SESSION['lName'] = $lname;
        } else {
            $f3->set('errors["lname"]', 'Please enter a valid last name at least 2 characters');
        }

        if (validAge($age)) {
            $_SESSION['age'] = $age;
        } else {
            $f3->set('errors["age"]', 'Please enter a valid age 18 and above');
        }

        if (validPhone($phone)) {
            $_SESSION['pNum'] = $phone;
        } else {
            $f3->set('errors["phone"]', 'Please enter a valid phone number');
        }

        //Redirect to profile route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: profile');
        }
    }

    //set gender/add to hive
    $f3->set('gender', getGender());
    $view = new Template();
    echo $view->render('views/personal-info.html');
});

// profile route
$f3->route('GET|POST /profile', function ($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //get email from post, set and validate
        $email = $_POST['email'];
        $f3->set('email', $email);

        //if seeking is set
        $seeking = $_POST['seeking'] ?? "";

        //state
        $state = $_POST['state'];

        if (validEmail($email)) {
            $_SESSION['email'] = $email;
        } else {
            $f3->set('errors["email"]', 'Please enter a valid email');
        }
        if (validSeeking($seeking)) {
            $_SESSION['seeking'] = $seeking;
        } else {
            $f3->set('errors["seeking"]', 'Please select a valid option');
        }
        if (validState($state)) {
            $_SESSION['state'] = $state;
        } else {
            $f3->set('errors["state"]', 'Please select a valid state');
        }


        $_SESSION['bio'] = $_POST['bio'];

        //Redirect to profile route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: interests');
        }
    }

    $f3->set('bio', validBio($_POST['bio']));
    $f3->set('seeking', getSeeking());
    $f3->set('state', getState());
    $view = new Template();
    echo $view->render('views/profile.html');
});

//views/interests route
$f3->route('GET|POST /interests', function ($f3) {

    $f3->set('indoor', getIndoor());
    $f3->set('outdoor', getOutdoor());
    $view = new Template();
    echo $view->render('views/interests.html');
});

//views/summary route
$f3->route('GET|POST /summary', function () {

    if (!empty($_POST['indoor'])) {
        $indoor = implode(", ", $_POST['indoor']);
    } else {
        $indoor = "";

    }

    if (!empty($_POST['outdoor'])) {
        $outdoor = implode(", ", $_POST['outdoor']);
    } else {
        $outdoor = "";
    }
    $_SESSION['indoor'] = $indoor;
    $_SESSION['outdoor'] = $outdoor;

    $view = new Template();
    echo $view->render('views/summary.html');
});


//run fat free
$f3->run();
