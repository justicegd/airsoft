<?php

Route::get('/',function (){
    return "asd";
})->name('home');

Route::get('/article/{articleId}','Backend\Article@article')->name('addArticlePage');

Route::post('/article','Backend\Article@addArticle')->name('addArticle');

Route::put('/article','Backend\Article@editArticle')->name('editArticle');




