<?php

namespace Dev\Mo\core;
use Exception;

class app {

    private $controller; 
    private $method; 

    public function __construct()
    {
        $this->url();
        $this->run();
    }

    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING']))
        {
            $url = $_SERVER['QUERY_STRING'];
            $url = explode('/', $url);
            
            if (isset($url[0]) && $url[0] != "") {
                $this->controller = $url[0];
            }
            
            if (isset($url[1]) && $url[1] != "") {
                $this->method = $url[1];
            }
        }
    }

    private function run()
    {
        $controller = "Dev\\Mo\\controllers\\" . $this->controller;

        if (class_exists($controller)) {
            $controller = new $controller;

            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], []);
            } else {
                throw new \Exception("Method $this->method not found in Class");
            }
        } else {
            throw new \Exception("Class not found");
        }
    }
}
