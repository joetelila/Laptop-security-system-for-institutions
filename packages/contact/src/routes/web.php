<?php 


Route::group(['namespace' => "Josseph\Contact\Http\Controllers"] , function(){
	Route::get("/contact" , "ContactController@index");
	Route::post("/contact" , "ContactController@store")->name('contact');

});

