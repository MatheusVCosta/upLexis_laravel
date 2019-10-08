<?php

Route::get('/{login?}', 'HomeController@index')->name('home');
Route::post('/login/entrar', 'Login\LoginController@login')->name('login.entrar');
Route::get('/login/sair', 'Login\LoginController@logout')->name('login.sair');

// Rotas protegidas
Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/exibir', 'Admin\AdminController@index')->name('admin.exibir');
    Route::get('/admin/buscar', 'Admin\AdminController@buscar')->name('admin.buscar');
    Route::post('/admin/salvar', 'Admin\AdminController@salvarArtigo')->name('admin.salvarArtigo');
    Route::get('/admin/deletar/{id_article}', 'Admin\AdminController@deleteArtigo')->name('admin.deleteArtigo');
});

