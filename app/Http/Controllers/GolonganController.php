<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\golongan;

class GolonganController extends Controller
{
    public function index(){
        $data = golongan::all();
        return view('data/golTarif',['data'=>$data]);
    }
    public function tambah(Request $dataInput){
        $simpan = new golongan;
        $simpan->kode = $dataInput->in_kodeGol;
        $simpan->nama = $dataInput->in_namaGol;
        $simpan->tarif = $dataInput->in_tarif;
        $simpan->save();

        return redirect('/admin/data-golongan-tarif');
    }
    public function editPage($id){
        $idDecode = substr(base64_decode($id),8);

        $dataById = golongan::find($idDecode);
        return view('data/golTarifEdit', ['dataById' => $dataById]);
    }
    public function saveEdit($id, Request $dataInput){
        $idDecode = substr(base64_decode($id),8);

        $simpan = golongan::find($idDecode);
        $simpan->kode = $dataInput->in_kodeGol;
        $simpan->nama = $dataInput->in_namaGol;
        $simpan->tarif = $dataInput->in_tarif;
        $simpan->save();
        return redirect('/admin/data-golongan-tarif');
    }
    public function hapus($id){
        $idDecode = substr(base64_decode($id),8);
        $hapus = golongan::find($idDecode);
        $hapus->delete();
        return redirect('/admin/data-golongan-tarif');
    }
}
