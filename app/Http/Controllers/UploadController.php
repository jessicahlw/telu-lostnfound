<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'kategoriBarang'=> 'required',
            'namaBarang'=>'required',
            'lokasiNemu'=>'required',
            'fileFoto'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('fileFoto');
        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuanUpload = 'data_file';
        $file->move(public_path($tujuanUpload), $nama_file);
        
        //Simpan ke database
        Barang::create([
            'user_id' => auth::id(),
            'kategoriBarang'=>$request->kategoriBarang,
            'namaBarang'=>$request->namaBarang,
            'lokasiNemu'=>$request->lokasiNemu,
            'fileFoto'=>$nama_file,
        ]);

        return back()->with('success', 'Laporan Berhasil Diupload dan Disimpan!');
    }
}