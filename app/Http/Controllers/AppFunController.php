<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Excel;
use DB;

class AppFunController extends Controller
{

    public function upload_seeder() {
        $seeder_files = glob(public_path("factories\*.csv"));


        foreach($seeder_files as $file) {
            Session::put('TEMP_T',pathinfo($file)['filename']);
            Excel::load( $file ,function($reader) {
                foreach ($reader->toArray() as $key => $row) {
                    if(!empty($row)) {
                        // s($row);
                        $temp_t = Session::get('TEMP_T');
                        DB::table($temp_t)->insert($row);
                    }
                }#foreach
            }); # excelMethod

        } #foreach
        Session::forget('TEMP_T');
        
        // Session::put('import_done', '<script> alert("Youe Data successfully import in database!!!"); </script>');
        
        Session::flash('import_done', '<script> alert("Youe Data successfully import in database!!!"); </script>');

        return back();
    } ## upload_dump(Request $request)

}
