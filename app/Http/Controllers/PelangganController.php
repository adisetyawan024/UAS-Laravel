<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\golongan;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(){
        $gol = golongan::all();
        $data = DB::table('pelanggans')
                ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
                ->select('pelanggans.*','golongans.kode as kode_gol')
                ->get();

        return view('data/pelanggan',['data' => $data,'dataGol' => $gol]);
    }
    public function tambah(Request $dataInput){
        $simpan = new Pelanggan;
        $simpan->kode = $dataInput->in_kodePelanggan;
        $simpan->nama = $dataInput->in_namaPelanggan;
        $simpan->whatsapp = $dataInput->in_nomorWA;
        $simpan->password = bcrypt("CatatAir".md5($dataInput->in_Password));
        $simpan->golongan = $dataInput->in_golongan;
        $simpan->status = "1";
        $simpan->alamat = $dataInput->in_alamat;
        $simpan->save();
        return redirect('/admin/data-pelanggan');
    }
    public function editPage($id){
        $idDecode = substr(base64_decode($id),8);
        $gol = golongan::all();
        $dataById = DB::table('pelanggans')
                ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
                ->select('pelanggans.*','golongans.kode as kode_gol')
                ->where('pelanggans.id','=',$idDecode)
                ->get();

        return view('data/pelangganDetail', ['dataById' => $dataById,'dataGol' => $gol]);
    }
    public function saveEdit($id, Request $dataInput){
        $idDecode = substr(base64_decode($id),8);
        if($dataInput->in_Password != "" || $dataInput->in_Password != NULL){
            $simpan = Pelanggan::find($idDecode);
            $simpan->kode = $dataInput->in_kodePelanggan;
            $simpan->nama = $dataInput->in_namaPelanggan;
            $simpan->whatsapp = $dataInput->in_nomorWA;
            $simpan->password = bcrypt("CatatAir".md5($dataInput->in_Password));
            $simpan->golongan = $dataInput->in_golongan;
            $simpan->status = $dataInput->in_status;
            $simpan->alamat = $dataInput->in_alamat;
            $simpan->save();
        }else{
            $simpan = Pelanggan::find($idDecode);
            $simpan->kode = $dataInput->in_kodePelanggan;
            $simpan->nama = $dataInput->in_namaPelanggan;
            $simpan->whatsapp = $dataInput->in_nomorWA;
            $simpan->golongan = $dataInput->in_golongan;
            $simpan->status = $dataInput->in_status;
            $simpan->alamat = $dataInput->in_alamat;
            $simpan->save();
        }
        return redirect('/admin/data-pelanggan');
    }
    public function hapus($id){
        $idDecode = substr(base64_decode($id),8);
        $hapus = Pelanggan::find($idDecode);
        $hapus->delete();
        return redirect('/admin/data-pelanggan');
    }
    public function detailPembayaranIndex($id){
        $idDecode = substr(base64_decode($id),8);
        $data = DB::table('pelanggans')
                ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
                ->select('pelanggans.*','golongans.kode as kode_gol')
                ->where('pelanggans.id',$idDecode)
                ->get();

        $dataPemakaian = DB::table('pemakaians')
            ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
            ->join('admins','admins.id','=','pemakaians.id_admin')
            ->join('golongans','golongans.id','=','pelanggans.golongan')
            ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
            ->where('pelanggans.id',$idDecode)
            ->get();

        return view('data/pelangganPembayaranDetail',['dataPel'=>$data,'dataPmk'=>$dataPemakaian]);
    }
}
