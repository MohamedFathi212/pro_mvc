<?php 

namespace Dev\Mo\controllers;
use Devmo\Mvc\core\db;

class category extends controller

{
    public function index()
    {
        $db = new db("category");
        $category= $db->select()->all();

        return $this->view('category',compact('category'));
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}


