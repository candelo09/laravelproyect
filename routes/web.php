<?php



Route::get('/inicio', 'micontrol@index');
Route::get('/crear', 'micontrol@create');
Route::post('/digitar','micontrol@store');