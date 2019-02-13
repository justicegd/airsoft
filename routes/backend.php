<?php

Route::get('/',function (){
    return redirect()->route("backend-articleList");
})->name('home');

Route::get('/article/list','Backend\Article@list')->name('articleList');

Route::get('/article/{articleId}','Backend\Article@article')->name('addArticlePage');

Route::post('/article','Backend\Article@addArticle')->name('addArticle');

Route::put('/article','Backend\Article@editArticle')->name('editArticle');

Route::get('/test',function (){
    return view('backend.layout.main');
})->name('test2');




