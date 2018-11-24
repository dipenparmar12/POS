<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Excel;

// Temp Fucntion for testing Purose
function s($str){ echo '<pre>';  print_r($str);  echo '</pre>'; }

class ImportController extends Controller
{

    // $type = ['xls', 'xlsx', 'csv'];
    public function downloadExcel($type='csv'){

        $data = App\TABLE_MODEL_NAME::get()->toArray();

        return Excel::create('NAME_OF_FILE_dump', function($excel) use ($data) {
            $excel->sheet('NAME_OF_SHEET', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);

    } # downloadExcel($type);

    
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
    } ## upload_dump(Request $request)


}