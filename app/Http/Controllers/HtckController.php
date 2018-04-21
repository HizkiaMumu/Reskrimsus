<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htck;
use Storage;
use Auth;
use File;

class HtckController extends Controller
{

    public function uploadHtck(Request $request){
      $data = $request->all();
      if ($request->hasFile('htck')) {
        $path = $request->file('htck')->store('/public/htck'); // with /public on path
        $filename = $request->file('htck')->hashName(); // remove the /public on path
        $validPath = '/storage/htck/' . $filename;

        $validHtck = new Htck;
        $validHtck->path = $validPath;
        $validHtck->filename = $filename;
        $validHtck->user_id = Auth::user()->id;
        $validHtck->pemilik = Auth::user()->subdit;
        $validHtck->save();

        return redirect()->back()->with("OK", "Berhasil upload HTCK.");
      } else {
        return redirect()->back()->with("ERR", "File tidak valid.");
      }
    }

    public function showHtck($filename){
      $path = '/storage/htck/' . $filename;
      $headers = [
        'Content-type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename=' .  $filename
      ];
      return response()->file($path, $headers);
    }

    public function deleteHtck($id){
      $data = Htck::find($id);
      Storage::delete('/public/htck/' . $data->filename);
      $data->delete();
      return redirect()->back()->with("OK", "Berhasil menghapus HTCK");
    }

}
