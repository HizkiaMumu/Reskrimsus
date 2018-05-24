<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PaparanPembangunanZi;
use App\Wbs;
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

    public function tambahWbs(Request $request){
      $data = $request->all();
      if($request->hasFile('lampiran_file_pendukung')){
        $path = $request->file('lampiran_file_pendukung')->store('/public/lampiran_file_pendukung'); // with /public on path
        $filename = $request->file('lampiran_file_pendukung')->hashName(); // remove the /public on path
        $validPath = '/storage/lampiran_file_pendukung/' . $filename;
        $data['lampiran_file_pendukung'] = $validPath;
        $wbs = Wbs::create($data);
        return redirect()->back()->with("OK", "Berhasil menambahkan laporan");
      } else {
        return redirect()->back()->with("ERR", "Silahkan masukan file pendukung");
      }
    }

    public function hapusWbs($id){
      $wbs = Wbs::findOrFail($id);
      $wbs->delete();
      return redirect()->back()->with("OK", "Berhasil menghapus laporan");
    }

    public function tambahPaparan(Request $request){
      $data = $request->all();
      if($request->hasFile('file')){
        $path = $request->file('file')->store('/public/file'); // with /public on path
        $filename = $request->file('file')->hashName(); // remove the /public on path
        $validPath = '/storage/file/' . $filename;
        $data['file'] = $validPath;
        $wbs = PaparanPembangunanZi::create($data);
        return redirect()->back()->with("OK", "Berhasil mengupload paparan");
      } else {
        return redirect()->back()->with("ERR", "Gagal mengupload paparan");
      }
    }

}
