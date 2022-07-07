<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class TestPDF extends Controller
{
    public function bot(){
        $pdf = PDF::loadView('template.bot.index', 
            [], 
            [], 
            [ 
                'title' => 'Certificate', 
                'format' => 'A4-L',
                'orientation' => 'L'
            ]);
        return $pdf->stream('bot.pdf');
    }

    public function psx_son(){
        $pdf = PDF::loadView('template.son.psx', 
            [], 
            [
                'logo' => base64_encode(Storage::get('public/24-01.png'))
            ], 
            [ 
                'title' => 'Certificate', 
                'format' => 'A4',
                'margin_left' => 5
            ]);
        return $pdf->stream('son.pdf');
    }

    public function pxk_son(){
        $pdf = PDF::loadView('template.son.pxk', 
            [], 
            [
                'logo' => base64_encode(Storage::get('public/24-01.png'))
            ], 
            [ 
                'title' => 'Certificate', 
                'format' => 'A4',
                'margin_left' => 5
            ]);
        return $pdf->stream('son.pdf');
    }
}
