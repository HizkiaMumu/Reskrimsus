<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StrukturOrganisasi;
use Storage;
use Auth;
use File;

class StrukturOrganisasiController extends Controller
{

    public function createStrukturOrganisasi(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('link_gambar')) {
            $path = $request->file('link_gambar')->store('/public/link_gambar/'); // with /public on path
            $filename = $request->file('link_gambar')->hashName(); // remove the /public on path
            $validPath = '/storage/link_gambar/' . $filename;
            $data['link_gambar'] = $validPath;
        }else {
            $data['link_gambar'] = '/storage/link_gambar/qM2TMoh6FJKtLUu6tLQa3HAxRcLKyBCx3HP646oq.png';
        }
        $kirim = StrukturOrganisasi::create($data);
        return redirect()->back()->with('OK', 'Berhasil menambahkan struktur organisasi');
    }

    public function deleteStrukturOrganisasi($id){
        $data = StrukturOrganisasi::find($id);
        $data->delete();
        return redirect()->back()->with('OK', 'Berhasil menghapus struktur organisasi.');
    }

    public function editStrukturOrganisasi($id)
    {
        $data = StrukturOrganisasi::find($id);
        return $data;
    }

    public function updateStrukturOrganisasi(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('link_gambar')) {
            $path = $request->file('link_gambar')->store('/public/link_gambar/'); // with /public on path
            $filename = $request->file('link_gambar')->hashName(); // remove the /public on path
            $validPath = '/storage/link_gambar/' . $filename;
            $data['link_gambar'] = $validPath;
        }
        $kirim = StrukturOrganisasi::find($id);
        $kirim->update($data);
        return redirect()->back()->with('OK', 'Berhasil mengupdate struktur organisasi');
    }


    public function getStrukturOrganisasi()
    {
        $data = StrukturOrganisasi::where('subdit', 'ditreskrimsus')->get();
        return $data;
    }

    public function getStrukturOrganisasiTipidkor()
    {
        $data = StrukturOrganisasi::where('subdit', 'tipidkor')->get();
        return $data;
    }

}
