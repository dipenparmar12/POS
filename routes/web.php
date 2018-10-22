<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/template', function () {
    return view('admin.main');
});
Route::get('/tab', function () {
    return view('admin.index');
});