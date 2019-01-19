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

Route::get('/', 'Web\Home@home')->name('home');

Route::get('/article/{articleId}','Web\Article@article')->name('article');

Route::get('/login',function (){
    return view('backend.login');
})->name('loginPage');

Route::post('/login','Backend\Authorization@login')->name('login');


Route::get('/logout','Backend\Authorization@logout')->name('logout');






