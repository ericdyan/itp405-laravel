<?php


// Route -> Controller -> load view

Route::get('/', 'InvoicesController@index');
Route::get('/genres', 'GenresController@index');
Route::get('/tracks', 'TracksController@index');
