<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
    	$email = $request["email"];
      // Truyen gia tri email qua MailNotify và gửi mail den $email
      Mail::to($email)->send(new MailNotify($email));
      if (Mail::failures()) 
      {
        Session::flash('message', ['danger',__('send_error')]);
      }
      else
      {
        
        Session::flash('message', ['success',__('send_success')]);
      }
      return redirect()->back();
    }
}
