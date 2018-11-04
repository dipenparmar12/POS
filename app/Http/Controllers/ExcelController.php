<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use DB;
use Session;
use Excel;

use App\Category;


class ExcelController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    } #importExport()

    public function downloadExcel($type)
    {
        $data = Category::get()->toArray();
        return Excel::create('Category_dump', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
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
                        // DB::table('categories')->insert($row);
                    }


                    // ------ By Specify Colunm Name and Row name
                    // $data['title'] = $row['title'];
                    // $data['description'] = $row['description'];
                    
                    // if(!empty($row)) {
                        // DB::table('Category')->insert($data);
                    // }
                }
            });
        }
        Session::put('success', 'Youe file successfully import in database!!!');
         // return back();

    } #importExcel(Request $request)

}