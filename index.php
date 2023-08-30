<?php
ini_set('display_errors',1);

require 'constants.php';
include_once 'functions/helperFunctions.php';


$FOLDER_LOCATION = '/geetkiseva/php';

$request = str_replace($FOLDER_LOCATION, '', $_SERVER['REQUEST_URI']);



$ROUTES = [
    '/' => 'pages/home.php',

    '/english' => 'pages/language.php',







    // testing
    "/test" => 'pages/test1.php',
    "/test/(num)" => 'pages/test1.php',
    '/test2' => 'test2.php',
    
     
    
    
    
    
    // ADMIN ROUTES---------------------
    '/adminindex' => 'admin/admin_login.php',
    '/admin_login_submit' => 'formactions/adminforms/login_submit.php',



    // run database init
    '/initDatabase' => 'initDatabase.php',



];




// var_dump(runRoute($ROUTES, $request));
include_once runRoute($ROUTES, $request);
// include_once "404.php";


?>