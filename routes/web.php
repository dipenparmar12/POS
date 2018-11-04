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
Route::get('/test/test', 'TestC@test');
Route::get('/test/tables','TestC@tables');
Route::get('/test/table_data','TestC@table_data');
Route::get('/test/get_table_data/{table?}','TestC@get_table_data');




// ----- Excel Import Export --------

// Route for view/blade file.
Route::get('importExport', 'ExcelController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcel', 'ExcelController@importExcel');