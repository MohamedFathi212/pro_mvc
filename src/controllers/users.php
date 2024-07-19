<?php 

namespace Dev\Mo\controllers;
class users extends controller
{
    public function index()
    {
        $name="mohamed";
        $this->view("home",compact('name'));
    }

    public function edit()
    {
        echo "test edit";
    }
}