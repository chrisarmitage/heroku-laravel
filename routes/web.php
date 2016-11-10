<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', function (Request $request) {
    return response()->json(\App\Item::all());
});

Route::get('/items/{id}', function ($id) {
    return response()->json(\App\Item::find($id));
});
