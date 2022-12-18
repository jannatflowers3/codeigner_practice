<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function about(){
        return("about");
    }
    public function user($id){
        return "You have given this ID $id";
    }
}
