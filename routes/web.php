<?php
// echo "<pre>";
// print_r($table);
// echo "</pre>";

use App\Http\Controllers\TestController;

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


// Test Controller Methods 
Route::get('/test/tables','Test@tables');
Route::get('/test/table_data','Test@table_data');
Route::get('/test/get_table_data/{table?}','Test@get_table_data');