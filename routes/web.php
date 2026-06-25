<?php

use Illuminate\Support\Facades\Route;
use PhpOption\None;

Route::get('/', function () {
    return view('home');
});

// CRUD routes below are stubbed

/**
 * Show all the created posts in the system
 */
Route::get('/all', function(){
    return 'Hello all';
    // return view('posts');
    });


/**
 * Display "create post" form page
 */
Route::get('/create', function(){
    return 'Hello create';
    // return view('create');
    });


/**
 * Display "edit post" form page
 */
Route::get('/edit/{id}', function(){return 'Hello edit id';});
// [App\Http\Controllers\PostController::class,'editPost']);


/**
 * Saves post - use in create and edit forms
 */
Route::post('/save', function(){ return ;});


/**
 * Deletes post from list page and return to post list
 */
Route::get('/delete/{id}', function(){return 'Hello delete';});
