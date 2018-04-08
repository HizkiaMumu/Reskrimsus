<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{

    public function auth(Request $request){
      $user = User::where('username', $request->username)->first(); // cek user
      if ($user != null) { // jika user ditemukan
        $validUser = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if ($validUser) { // jika username dan password cocok
          return redirect('/admin');
        } else { // karena user sudah ditemukan berarti password salah
          return redirect()->back()->with('ERR', 'Password yang anda masukan salah.');
        }
      } else { // jika user tidak ditemukan berarti username salah
        return redirect()->back()->with('ERR', 'Username yang anda masukan salah.');
      }
    }

    public function logout(){
      Auth::logout();
      return redirect()->back();
    }

}
