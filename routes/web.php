<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;//import our controller

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
    //echo $name;
    //return view('welcome');
    return redirect("about");
});

Route::get('/about', function (){
    return view('about');
});
Route::get('contact',function(){
    return view('contact');
});
//Route::view('contact', 'contact');

//using the controller//in Http//Controllers//Users
Route::get('users/{user}',[Users::class,'viewLoad']);
Route::view('users', 'users');