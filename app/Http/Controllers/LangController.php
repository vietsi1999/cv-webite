<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
	// Tao mang chua danh sach ngon ngu
  private $langActive = [
  	'vi',
  	'en',
  ];

  // Tao ham doi ngon ngu
  public function changeLang(Request $request, $lang)
  {
  	// Neu $lang co ton tai trong mang langActive
  	if (in_array($lang, $this->langActive)) 
  	{
  		// them gia tri $lang vao session voi key la 'lang'
  		$request->session()->put(['lang'=>$lang]);
  		// tro ve trang truoc do
  		return redirect()->back();
  	}
  }
}
