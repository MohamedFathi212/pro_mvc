<?php

// require "../vendor/autoload.php";

// use Dev\Mo\core;
// use Dev\Mo\core\app;
// // use Dev\Mo\core\db;
// $bo = new app;
// (new Dev\Mo\core\app );

require "../vendor/autoload.php";
require "bootstrap.php"; 



use Dev\Mo\core;
use Dev\Mo\core\app;
use Dev\Mo\core\route;

print_r(route::$routes);
$bo = new app;


