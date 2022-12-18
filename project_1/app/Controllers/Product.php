<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return "product home page";
    }
    public function single(){
        return "single product page";
    }
}
