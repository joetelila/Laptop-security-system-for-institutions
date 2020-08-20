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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::get("/" , "FirstController@index")->name('homepage');
    Route::get("/logout" , function() {
        Auth::logout();
        return redirect("/");
        Session::flush();
    });
    Route::get("/register" , "LaptopController@index")->name('register');
    // Route::get("/register2" , "LaptopController@index2")->name('register');

    Route::post("/checkStudent" , "StudentController@checkStudent")->name('checkstud');
    Route::post("/addstudentlaptop/" , "LaptopController@addStudentLaptop")->name('addstudentlaptop');

    Route::get("/registered/{id}" , "LaptopRegisterController@show")->name('registered');

});


Route::middleware('web')->group(function() {

});
