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
    return view('index');
});

Route::get('/api/items', function (Request $request) {
    $term = $request->input('q');

    if ($term !== '') {
        $results = \App\Item::where('name', 'LIKE', "%{$term}%")->get();
    } else {
        $results = \App\Item::all();
    }

    return response()->json($results);
});

Route::get('/api/items/{id}', function ($id) {
    return response()->json(\App\Item::find($id));
});
