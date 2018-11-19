<?php

// return response()->view('errors.404');
// echo $request->url(); // GetFUll URL
// echo  $request->path(); // Getting the URL after domain
// echo str_plural(item);
// echo str_singular("items")
// $msg = null;
// echo "<script> alert('{$msg}') </script>";

Session::put('company_id' , 1 );


Route::get('/', function () {
    echo " R-POS ";
    // return view('welcome');
});

Route::get('/template', function () {
    return view('admin.main');
});



// POS Oprations
Route::get('/pos/', 'PosController@index');
Route::get('/pos/fun/{fun?}/{p1?}/{p2?}/', 'PosController@href');
Route::post('/pos/item_table/{subCategory_id}','PosController@get_items');
// Route::get('/pos/item_table/{subCategory_id}','PosController@get_items');



// Route::get('/temp',function(){
//     echo \App\SubCategory::all();
// });


Route::group(['middleware' => 'Session_Check'], function() {

    // Route::get('/table/test', 'TableController@test');
    // Route::get('/category/test', 'CategoryController@test');
    // Route::get('/item/test', 'ItemController@test');

    Route::resource('/Category', 'CategoryController');
    Route::post('/Category/delete/{id}', 'CategoryController@delete_record')->where(['id'=>'[0-9]+']);
    Route::post('/Category/db_records/{table?}','CategoryController@get_table_records');

    Route::resource('/SubCategory', 'SubCategoryController');
    Route::post('/SubCategory/delete/{id}', 'SubCategoryController@delete_record')->where(['id'=>'[0-9]+']);
    Route::post('/SubCategory/db_records/{table?}','SubCategoryController@get_table_records');

    Route::resource('/Item', 'ItemController');
    Route::post('/Item/delete/{id}', 'ItemController@delete_record')->where(['id'=>'[0-9]+']);;
    Route::post('/Item/db_records/{table?}','ItemController@get_table_records');

    Route::resource('/Table', 'TableController');
    Route::post('/Table/delete/{id}', 'TableController@delete_record')->where(['id'=>'[0-9]+']);
    Route::post('/Table/db_records/{table?}','TableController@get_table_records');

    // Route::resource('/PaymentMethod', 'PaymentMethodController');
    // Route::post('/PaymentMethod/delete/{id}', 'PaymentMethodController@delete_record')->where(['id'=>'[0-9]+']);
    // Route::post('/PaymentMethod/db_records/{table?}','PaymentMethodController@get_table_records');



    // Route::resource('/category', 'CategoryController');
    // Route::post('/category/delete/{id}', 'CategoryController@delete_record');
    // Route::post('/category/db_records/{table?}','CategoryController@get_table_records');

    // Route::resource('/sub_category', 'SubCategoryController');
    // Route::post('/sub_category/delete/{id}', 'SubCategoryController@delete_record');
    // Route::post('/sub_category/db_records/{table?}','SubCategoryController@get_table_records');

    // Route::resource('/item', 'ItemController');
    // Route::post('/item/delete/{id}', 'ItemController@delete_record');
    // Route::post('/item/db_records/{table?}','ItemController@get_table_records');

});







// Test Controller Methods 
Route::get('/test', 'TestC@index');
Route::get('/test/fun/{fun?}/{p1?}/{p2?}/', 'TestC@href');
Route::get('/test/test/{parameter?}', 'TestC@test');
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






// ----- Drop All Tables From DB --------
Route::get('database_table_drop','TestC@drop_tables');


// ----- Excel Import Export --------
// // Mash Data Seeder (DUMP Data)
Route::get('import_table', 'AppFunController@upload_seeder');


// Route for view/blade file.
Route::get('importExport', 'ExcelController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcel', 'ExcelController@importExcel');