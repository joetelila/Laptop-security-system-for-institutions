<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware'=>['web']], function(){

  /*  Route::get('/login', function () {
        return view('login');
    })->name('home'); */

    Route::get('/',[
        'uses' => 'firstController@getIndex',
        'as' => 'homePage',
    ]);

    Route::post('/home',[
       'uses' => 'firstController@PostSignin',
        'as' => 'home'
     ]);
    Route::get('/home',[
      'uses' => 'firstController@getIndex',
      'as' => 'home',
      ]);

    Route::get('/logout',[

        'uses' => 'firstController@getlogout',
        'as' => 'logout',

    ]);
    Route::get('/register',[

        'uses' => 'laptopController@getRegistered',
        'as'=>'register',
        'middleware' => 'auth'

    ]);
    Route::get('/manualcheck',[

        'uses' => 'laptopController@manCheck',
        'as'=>'manualcheck',
        'middleware' => 'auth'

    ]);
    Route::get('/addnewstudent',[

        'uses' => 'userController@addUser',
        'as'=>'addnewstudent',
        'middleware' => 'auth'

    ]);

    Route::post('/checkstud',[

        'uses' => 'laptopController@checkStudent',
        'as' => 'checkstud',
        'middleware' => 'auth'
    ]);
    Route::post('addstudentlaptop',[

        'uses' => 'laptopController@addStudentLaptop',
        'as' => 'addstudentlaptop',
        'middleware' => 'auth'

    ]);
    Route::post('addstafflaptop',[

        'uses' => 'laptopController@addStaffLaptop',
        'as' => 'addstafflaptop',
        'middleware' => 'auth'

    ]);
    Route::post('addguestlaptop',[

        'uses' => 'laptopController@addGuestLaptop',
        'as' => 'addguestlaptop',
        'middleware' => 'auth'

    ]);
    Route::post('regNewStudent',[

        'uses' => 'userController@regStudent',
        'as' => 'regNewStudent',
        'middleware' => 'auth'

    ]);
    Route::get('/search',[

        'uses' => 'laptopController@getSearch',
         'as' => 'search',
         'middleware' => 'auth'
    ]);
});
