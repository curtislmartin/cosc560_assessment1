<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// mostly stubs

Route::get('/all', function(){
    return view('posts');
});

Route::get('/create', function(){
    return view('create');
});

Route::get('/edit/{id}',[App\Http\Controllers\PostController::class,'editPost']); // not yet built

Route::post('/save');

Route::get('/delete/{id}');
