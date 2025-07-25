<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    Auth::logout();
    return redirect()->route('login');
});

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/eight', 'eight');
    Route::get('/seven', 'seven');
    Route::get('/six', 'six');
    Route::get('/five', 'five');
    Route::get('/four', 'four');
    Route::get('/three', 'three');
    Route::get('/products', 'products');
    Route::get('/test/two', 'TestTwo');
    Route::get('/posts', 'posts');
    Route::get('/users', 'users');
    Route::get('/success', 'success')->name('success');
});

