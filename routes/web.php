<?php

Route::get('/', 'Hello@index');
Route::get('/hello', 'Hello@index');
Route::get('/hello/{name}', 'Hello@show');
