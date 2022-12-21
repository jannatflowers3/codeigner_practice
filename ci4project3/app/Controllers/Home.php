<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {  
         $data ['title'] ="My Home Page";
         $copyrignt['copyright'] = "copyright@2022 by jannatflowersw";
     return view('welcome_message',$data,$copyrignt);
       
    }
    public function about(){
        $data['title'] ="About Us";
        $copyrignt['copyright'] = "copyright@2022 by jannatflowersw";
       return view("aboutus",$data,$copyrignt);
       
    }
    public function contact(){
        $data['title'] ="About Us";
        $copyrignt['copyright'] = "copyright@2022 by jannatflowersw";
        echo view("contact_us",$data,$copyrignt);
    
    }
}
