<?php

use App\Http\Controllers\candyController;
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

Route::controller(candyController::class)->group(function(){
    Route::get('/home','viewhome');
    Route::get('/contact','viewcontact');
    Route::get('/about','viewabout');
    Route::get('/login','viewlogin');
    Route::get('/register','viewregister');
});
Route::get('/id/{id}/',[candyController::class , 'num'])-> where('id','[0-9]+');
Route::get('name/{name}',[candyController::class , 'user'])-> where('name', '[A-z]+');
