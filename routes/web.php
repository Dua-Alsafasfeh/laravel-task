<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return "Duaa Alsafasfeh";
});
//required parameters
// Route::get('/{name}/{id}', function ($name,$id) {
//     // return view('welcome');
//     return "Hellooooooooooooo ".$name." your id is ".$id;
// });
// optional parameters
// Route::get('/{name?}/{id?}', function ($name = 'null',$id = null) {
//     return "Hellooooooooooooo ".$name." your id is ".$id;
// }); 

Route::get('/duaa',function(){
    return view('orange');
});
Route::get('/choco',function(){
    return view('chocolate');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/about',function(){
    return view('about');
});