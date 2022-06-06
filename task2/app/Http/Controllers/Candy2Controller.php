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


    public function fetch(){
        $data = candy::all();
        return view('data', compact('data'));
    }
    public function destroy($id)
    {
        $data = candy::find($id);
        $data->delete();
        return redirect('data')->with('status','data Deleted Successfully');
    }

    public function edit($id){
        $editor= candy::find($id);
        return view('update', compact('editor'));
    }

    public function update(Request $request,$id){
        $editor= candy::find($id);
        $editor->title = $request->input('title');
        $editor->body = $request->input('body');
        $editor->update();
        return redirect('data')->with('status','data edited Successfully');
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $dataAdd= new candy();
        $dataAdd->title = $request->input('title');
        $dataAdd->body = $request->input('body');
        $dataAdd->save();
        return redirect('data')->with("status","data added successfully");
    }
}
