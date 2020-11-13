<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DomPDF;

class DownloadController extends Controller
{
    public function downloadCV()
    {
    	return DomPDF::loadView('PDFs.cv')->download('Curriculum_Vitae_Tran_Viet_Si.pdf');
    }
}
