<?php

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


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Contact'], function () {
    Route::resource('contacts', 'ContactsController');
    Route::get('/delete/1', function () {
        return view('contact.delete');
    })->name('contacts.delete');
});


Auth::routes();
