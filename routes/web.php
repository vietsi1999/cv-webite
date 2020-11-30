<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('downloadCV','DownloadController@downloadCV')->name('download_CV');
Route::get('lang/{lang}','LangController@changeLang')->name('lang');
Route::get('send_mail','SendMailController@sendMail')->name('send_mail');
