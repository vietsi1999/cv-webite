<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadCV()
    {
    	$file="./resources/Curriculum_Vitae_Tran_Viet_Si.pdf";
        return Response::download($file);
    }
}
