<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $req)
    {
        $data = [
            'date' => date('m/d/Y'),
            'adresse_de_facturation' => $req->adresse_de_facturation,
            'société' => $req->société,
            'adresse_ligne1' => $req->adresse_ligne1,
            'adresse_ligne2' => $req->adresse_ligne2,
            'ice'=> $req->ice,
            'ville' => $req->ville,
            'number_readers' => $req->number_readers,
            'total' => $req->total,
        ];
        $customPaper = array(0,0,600,900);
        $pdf = PDF::loadView('testPDF', $data)->setPaper($customPaper,'portrait');
     
        return $pdf->download('tutsmake.pdf');
        // return $req->input();
    }
}