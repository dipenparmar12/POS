<?php

Route::get('/', function () {
    echo " R-POS ";
    // return view('welcome');
});

Route::get('/template', function () {
    return view('admin.main');
});

Route::get('/tab', function () {
    return view('admin.index');
});
