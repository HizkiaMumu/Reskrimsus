<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zi;

class ZiController extends Controller
{

    public function createAPRB(Request $request){
      $data = $request->all();
      if ($request->hasFile('icon')) {
        $path = $request->file('icon')->store('/public/icon'); // with /public on path
        $filename = $request->file('icon')->hashName(); // remove the /public on path
        $validPath = '/storage/icon/' . $filename;
        $data['icon'] = $validPath;
        $aprb = Zi::create($data);
        return redirect()->back()->with("OK", "Berhasil menambahkan APRB");
      } else {
        return redirect()->back()->with("ERR", "Harap masukan icon");
      }
    }

    public function editAPRB(Request $request, $id){
      $aprb = Zi::findOrFail($id);
      $aprb->title = $request->title;
      $aprb->description = $request->description;

      if($request->hasFile('icon')){
        $path = $request->file('icon')->store('/public/icon'); // with /public on path
        $filename = $request->file('icon')->hashName(); // remove the /public on path
        $validPath = '/storage/icon/' . $filename;
        $aprb->icon = $validPath;
      }

      $aprb->content = $request->content;
      $aprb->save();
      
      return redirect()->back()->with("OK", "Berhasil update data APRB");
    }

    public function deleteAPRB($id){
      $aprb = Zi::findOrFail($id);
      $aprb->delete();
      return redirect()->back()->with("OK", "Berhasil menghapus APRB");
    }

    public function detailAprb($id){
      $aprb = Zi::findOrFail($id);
      return $aprb;
    }

}
