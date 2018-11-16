<?php
Session::put('company_id' , 1 );


Route::get('/', function () {
    echo " R-POS ";
    // return view('welcome');
});

Route::get('/template', function () {
    return view('admin.main');
});


Route::get('/crud','posController@crud');

Route::get('/pos/{page?}', 'PosController@href');
Route::resource('/app', 'AppController');



Route::group(['middleware' => 'Session_Check'], function() {

	Route::resource('/category', 'CategoryController');
	Route::post('/category/delete/{id}', 'CategoryController@delete_record');
    Route::post('/category/db_records/{table?}','CategoryController@get_table_records');

	Route::resource('/sub_category', 'SubCategoryController');
	Route::post('/sub_category/delete/{id}', 'SubCategoryController@delete_record');

	Route::resource('/item', 'ItemController');
	Route::post('/item/delete/{id}', 'ItemController@delete_record');

});






// Test Controller Methods 
Route::get('/test', 'TestC@index');
Route::get('/test/test', 'TestC@test');
Route::get('/test/tables','TestC@tables');
Route::get('/test/table_data','TestC@table_data');
Route::get('/test/get_table_data/{table?}','TestC@get_table_data');




// ----- Ajax CRUD --------
Route::group(['middleware'=>['Ajax_check']] , function(){
    Route::get('test/ajax',function(){
        echo "Middleware Ajax Check ";
    });
    // Route::resource('category', 'CategoryController');
});

Route::get('test/item', function () {
    return view('item.create');
});





// ----- Excel Import Export --------
// Route for view/blade file.
Route::get('importExport', 'ExcelController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcel', 'ExcelController@importExcel');