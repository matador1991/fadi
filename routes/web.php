<?php

use Illuminate\Support\Facades\Auth;
Auth::routes();

route::get("/", function (){
    return view('welcome');
} );

Route::get('/home', 'HomeController@index');




