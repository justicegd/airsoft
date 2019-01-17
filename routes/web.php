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

Route::get('/backend/article/{articleId}','Backend\Article@article')->name('addArticlePage');

Route::post('/backend/article/','Backend\Article@addArticle')->name('addArticle');

Route::put('/backend/article/','Backend\Article@editArticle')->name('editArticle');



