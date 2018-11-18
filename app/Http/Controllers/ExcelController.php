<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use DB;
use Session;
use Excel;

use App\Sub_categories;


class ExcelController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    } #importExport()

    public function downloadExcel($type)
    {
        $data = Category::get()->toArray();
        return Excel::create('sub_categories_dump', function($excel) use ($data) {
            $excel->sheet('sub_categories', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);

    } # downloadExcel($type);

    public function importExcel(Request $request)
    {

        if($request->hasFile('import_file')){
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) {
                foreach ($reader->toArray() as $key => $row) {

                    if(!empty($row)) {
                        DB::table('sub_categories')->insert($row);
                    }

                    // ------ By Specify Colunm Name and Row name
                    // $data['title'] = $row['title'];
                    // $data['description'] = $row['description'];
                    
                    // if(!empty($row)) {
                        // DB::table('sub_categories')->insert($data);
                    // }
                }
            });
        }

        Session::put('success', 'Youe file successfully import in database!!!');

        return back();

    } #importExcel(Request $request)


    


}