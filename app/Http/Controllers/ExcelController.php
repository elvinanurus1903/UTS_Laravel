<?php

namespace App\Http\Controllers;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use PDF;
use App\Film;

class ExcelController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new SiswaExport, 'film.xlsx');
    }

     public function cetak_pdf()
    {
    	$data = Film::all();
 
    	$pdf = PDF::loadview('export.data',['data'=>$data]);
    	return $pdf->download('laporan-data-pdf');
    }
}
