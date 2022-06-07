<?php

namespace App\Http\Controllers;
use App\Models\candy;
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

    public function form_validate(Request $request ){
        $request->validate([
            'firstname'=>'required|alpha',
            'lastname'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'phonenumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();//to show data in json format
    }
}
