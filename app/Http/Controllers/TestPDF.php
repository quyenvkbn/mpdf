<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class TestPDF extends Controller
{
    public function index(){
        $pdf = PDF::loadView('template.demo', 
            [], 
            [], 
            [ 
                'title' => 'Certificate', 
                'format' => 'A4-L',
                'orientation' => 'L'
            ]);
        return $pdf->stream('certificate.pdf');
    }
    public function webindex(){
        return view('template.demo');
    }
}
