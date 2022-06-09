<?php
use App\Http\Controllers\Candy2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

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
Route::controller(Candy2Controller::class)->group(function(){
    Route::get('/home','viewhome');
    Route::get('/contactus','viewcontact');
    Route::get('/aboutus','viewabout');
    Route::get('/aboutus','about');
    Route::get('/login','viewlogin');
    Route::get('/register','viewregister');
    Route::get('/shop','viewshop');
});

Route::controller(CardController::class)->group(function(){
    Route::get('index', 'display');
    Route::get('add-product', 'add');
    Route::post('add-product','insert');
    Route::get('delete/id/{id}', 'destroy');
    Route::get('edit-product/id/{id}', 'edit');
    Route::put('update-product/id/{id}', 'update');
});
Route::post('register', [Candy2Controller::class, 'form_validate']);
Route::view('/show','layout.register');
