<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PhpOption\None;

Route::get('/', function () {
    return view('home');
});

/**
 * Show all the created posts in the system
 */
Route::get('/all', [PostController::class, "list"]);


/**
 * Display "create post" form page
 */
Route::get('/create', [PostController::class, "create"]);


/**
 * Display "edit post" form page
 */
Route::get('/edit/{id}', [PostController::class, "edit"]);


/**
 * Saves post - use in create and edit forms
 */
Route::post('/save', [PostController::class, "save"]);


/**
 * Deletes post from list page and return to post list
 */
Route::get('/delete/{id}', [PostController::class, "delete"]);
