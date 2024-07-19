<?php 

use Dev\Mo\core\route;

route::get('example',['home','index']);

route::get('/',['home','edit']);
