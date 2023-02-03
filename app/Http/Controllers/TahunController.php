<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahun;
use Illuminate\Support\Facades\DB;

class TahunController extends Controller
{
    public function index(){
        $data = Tahun::all();
        return view('setting/tahun',['data'=>$data]);
    }
    public function tambah(Request $dataInput){
        $simpan = new Tahun;
        $simpan->tahun = $dataInput->in_namaPelanggan;
        $simpan->status = "1";
        $simpan->save();
        return redirect('/admin/setting-tahun');
    }
    public function editShow($id){
        $idDecode = substr(base64_decode($id),8);
        $data = DB::table('tahuns')
            ->where('tahuns.tahun', '=',$idDecode)
            ->get();
        return view('setting/tahunDetail', ['data'=>$data]);
    }
    public function save($id, Request $dataInput){
        $idDecode = substr(base64_decode($id),8);

        $save = Tahun::find($idDecode);
        $save->tahun = $dataInput->in_namaPelanggan;
        $save->status = $dataInput->in_status;
        $save->save();
        return redirect('/admin/setting-tahun');
    }
    public function hapus($id){
        $idDecode = substr(base64_decode($id),8);

        $save = Tahun::find($idDecode);
        $save->delete();
        return redirect('/admin/setting-tahun');
    }
}
