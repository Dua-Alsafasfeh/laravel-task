<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Candy2Controller extends Controller
{
    public function viewhome(){
        return view('layout.home');
    }
    public function viewcontact(){
        return view('layout.contactus');
    }
    public function viewabout(){
        return view('layout.aboutus');
    }
    public function viewlogin(){
        return view('layout.login');
    }
    public function viewregister(){
        return view('layout.register');
    }
    public function about(){
        $group =array('one' => 'Anas Allawafeh','two' => 'Duaa Alsafasfeh','three' => 'Marwa nseerat','four' => 'Taebah Shlouh');
        return view('layout.aboutus')->with($group);
    }
}
