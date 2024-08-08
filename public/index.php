<?php

// require "../vendor/autoload.php";

// use Dev\Mo\core;
// use Dev\Mo\core\app;
// // use Dev\Mo\core\db;
// $bo = new app;
// (new Dev\Mo\core\app );

require "../vendor/autoload.php";
use Dev\Mo\core\route;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require "bootstrap.php"; 


use Dev\Mo\core;
use Dev\Mo\core\app;

$bo = new app;


