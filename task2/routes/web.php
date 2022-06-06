<?php
use App\Http\Controllers\Candy2Controller;
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
Route::controller(Candy2Controller::class)->group(function(){
    Route::get('/home','viewhome');
    Route::get('/contactus','viewcontact');
    Route::get('/aboutus','viewabout');
    Route::get('/aboutus','about');
    Route::get('/login','viewlogin');
    Route::get('/register','viewregister');
});

Route::get('/data', [Candy2Controller::class, 'fetch']);
Route::get('delete-data/id/{id}', [Candy2Controller::class, 'destroy']);
Route::get('edit-data/id/{id}', [Candy2Controller::class, 'edit']);
Route::put('update-data/id/{id}', [Candy2Controller::class, 'update']);
Route::get('add-data', [Candy2Controller::class, 'add']);
Route::post('add-data', [Candy2Controller::class, 'create']);
