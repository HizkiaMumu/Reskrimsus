<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SupportEmail;
use Mail;

class EmailController extends Controller
{

    public function kirim(Request $request){
      $data = $request->all();
      Mail::to('hizkiamumu24@gmail.com')->send(new SupportEmail($data));
      return redirect()->back()->with("OK", "Berhasil mengirim email!");
    }

}
