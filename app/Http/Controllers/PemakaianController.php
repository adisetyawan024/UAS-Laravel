<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\golongan;
use App\Models\Tahun;
use App\Models\Pemakaian;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class PemakaianController extends Controller
{
    public function index(){
        $data = DB::table('pemakaians')
            ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
            ->join('admins','admins.id','=','pemakaians.id_admin')
            ->join('golongans','golongans.id','=','pelanggans.golongan')
            ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
            ->get();
        

        return view('data/pemakaian',['dataPemakaian'=>$data]);
    }
    public function showEdit($id){
        $tahun = Tahun::all();
        $idDecode = substr(base64_decode($id),8);
        $data = DB::table('pemakaians')
            ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
            ->join('admins','admins.id','=','pemakaians.id_admin')
            ->join('golongans','golongans.id','=','pelanggans.golongan')
            ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
            ->where('pemakaians.id',$idDecode)
            ->get();

        $tglSebelum = strtotime($data[0]->tahun.'-'.$data[0]->bulan.'-13 -1 months');
        $blnSebelum = DB::table('pemakaians')
            ->select('*')
            ->where('pemakaians.id_pelanggan','=',$data[0]->id_pelanggan)
            ->where('pemakaians.bulan','=',date('m', $tglSebelum))
            ->where('pemakaians.tahun','=',date("Y", $tglSebelum))
            ->get();
        if(!$blnSebelum->isEmpty()){
            $pemakaian = $blnSebelum[0]->pemakaianBlnIni;
        }else{
            $pemakaian = '0';
        }
        return view('data/pelangganPembayaranEdit',['data'=>$data,'tahun'=>$tahun,'dataBlnSebelum'=>$pemakaian]);
    }
    public function saveEdit($id, Request $dataInput){
        $idDecode = substr(base64_decode($id),8);

        $save = Pemakaian::find($idDecode);
        $save->bulan = $dataInput->in_bln;
        $save->tahun = $dataInput->in_tahun;
        $save->pemakaianBlnIni = $dataInput->in_pmkBlnIni;
        $save->metode = $dataInput->in_metode;
        $save->status = $dataInput->in_status;
        $save->save();
        Session::flash('simpanData', '<div class="alert d-flex align-items-center alert-primary alert-dismissible fade show" role="alert">Data Berhasil Disimpan<button class="btn btn-close position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>'); 
        return redirect()->back();
    }
    public function hapus($id){
        $idDecode = substr(base64_decode($id),8);

        $save = Pemakaian::find($idDecode);
        $save->delete();
        return redirect('/admin/data-pemakaian');
    }
    public function invoice($id){
        $idDecode = substr(base64_decode($id),8);
        $data = DB::table('pemakaians')
        ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
        ->join('admins','admins.id','=','pemakaians.id_admin')
        ->join('golongans','golongans.id','=','pelanggans.golongan')
        ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
        ->where('pemakaians.id',$idDecode)
        ->get();

        $tglSebelum = strtotime($data[0]->tahun.'-'.$data[0]->bulan.'-13 -1 months');
        $blnSebelum = DB::table('pemakaians')
            ->select('*')
            ->where('pemakaians.id_pelanggan','=',$data[0]->id_pelanggan)
            ->where('pemakaians.bulan','=',date('m', $tglSebelum))
            ->where('pemakaians.tahun','=',date("Y", $tglSebelum))
            ->get();
        if(!$blnSebelum->isEmpty()){
            $pemakaian = $blnSebelum[0]->pemakaianBlnIni;
        }else{
            $pemakaian = '0';
        }
        return view('data/pelangganPembayaranInvoice',['data'=>$data,'dataBlnSebelum'=>$pemakaian]);
    }
    public function catatPemakaian(){
        return view('tagihan/catatTagihan');
    }
    public function detailCatatTagihan(Request $id){
        $data = DB::table('pelanggans')
                ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
                ->select('pelanggans.*','golongans.kode as kode_gol')
                ->where('pelanggans.kode',$id->kd_pel)
                ->get();

        if(!$data->isEmpty()){
            $blnSebelum = DB::table('pemakaians')
                ->select('*')
                ->where('pemakaians.id_pelanggan','=',$data[0]->id)
                ->orderBy('pemakaians.id', 'desc')
                ->first();
            if(!empty($blnSebelum)){
                $pemakaian = array(
                    'isBulanSblm' => '1',
                    'data' => $blnSebelum
                );
            }else{
                $pemakaian = array(
                    'isBulanSblm' => '0',
                    'data' => NULL
                );
            }
            return view('tagihan/catatTagihanDetail',['data'=>$data,'dataPemakaian'=>$pemakaian]);
        }else{
            Session::flash('dataTidakAda', '<div class="alert d-flex align-items-center alert-danger alert-dismissible fade show" role="alert">Pelanggan Tidak Ditemukan. Cek Kembali Kode Pelanggan!<button class="btn btn-close position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>'); 
            return redirect('/admin/catat-tagihan');
        }
    }
    public function suksesCatatTagihan(Request $input){
        $idDecode = substr(base64_decode($input->in_idPel),8);
        $kd_pakai = date("dmy")."-".date("his")."-".$idDecode;

        $save = new Pemakaian;
        $save->kodeTagihan = $kd_pakai;
        $save->bulan = $input->in_bln;
        $save->tahun = $input->in_tahun;
        $save->pemakaianBlnIni = $input->in_BlnIni;
        $save->metode = "0";
        $save->status = '0';
        $save->id_pelanggan = $idDecode;
        $save->id_admin = '6';
        $save->save();

        $data = DB::table('pemakaians')
        ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
        ->join('admins','admins.id','=','pemakaians.id_admin')
        ->join('golongans','golongans.id','=','pelanggans.golongan')
        ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
        ->where('pemakaians.kodeTagihan',$kd_pakai)
        ->get();

        $tglSebelum = strtotime($data[0]->tahun.'-'.$data[0]->bulan.'-13 -1 months');
        $blnSebelum = DB::table('pemakaians')
            ->select('*')
            ->where('pemakaians.id_pelanggan','=',$data[0]->id_pelanggan)
            ->where('pemakaians.bulan','=',date('m', $tglSebelum))
            ->where('pemakaians.tahun','=',date("Y", $tglSebelum))
            ->get();
        if(!$blnSebelum->isEmpty()){
            $pemakaian = array(
                'isBulanSblm' => '1',
                'data' => $blnSebelum
            );
        }else{
            $pemakaian = array(
                'isBulanSblm' => '0',
                'data' => NULL
            );
        }
        return view('tagihan/catatTagihanSukses',['data'=>$data,'dataSblm'=>$pemakaian]);
    }
    public function bayarTagihanView(){
        return view('tagihan/bayarTagihan');
    }
    public function bayarTagihanDet(Request $id){
        $data = DB::table('pelanggans')
                ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
                ->select('pelanggans.*','golongans.kode as kode_gol')
                ->where('pelanggans.kode',$id->kd_pel)
                ->get();

        if(!$data->isEmpty()){
            $dataPemakaian = DB::table('pemakaians')
                    ->join('pelanggans','pelanggans.id','=','pemakaians.id_pelanggan')
                    ->join('admins','admins.id','=','pemakaians.id_admin')
                    ->join('golongans','golongans.id','=','pelanggans.golongan')
                    ->select('pemakaians.*','admins.nama as nama_admin','pelanggans.id as id_pelanggan','pelanggans.kode as kode_pelanggan','pelanggans.nama as nama_pelanggan','golongans.nama as nama_gol','golongans.tarif as tarif_gol')
                    ->where('pelanggans.id',$data[0]->id)
                    ->where('pemakaians.status','0')
                    ->get();

            if(!$dataPemakaian->isEmpty()){
                $tglSebelum = strtotime($dataPemakaian[0]->tahun.'-'.$dataPemakaian[0]->bulan.'-13 -1 months');
                $blnSebelum = DB::table('pemakaians')
                    ->select('*')
                    ->where('pemakaians.id_pelanggan','=',$dataPemakaian[0]->id_pelanggan)
                    ->where('pemakaians.bulan','=',date('m', $tglSebelum))
                    ->where('pemakaians.tahun','=',date("Y", $tglSebelum))
                    ->get();
                if(!$blnSebelum->isEmpty()){
                    $pemakaian = array(
                        'isBulanSblm' => '1',
                        'data' => $blnSebelum
                    );
                }else{
                    $pemakaian = array(
                        'isBulanSblm' => '0',
                        'data' => NULL
                    );
                }
                return view('tagihan/bayarTagihanDetail',['data'=>$data,'dataPmk'=>$dataPemakaian,'blnSblm'=>$pemakaian]);
            }else{
                Session::flash('dataTidakAda', '<div class="alert d-flex align-items-center alert-danger alert-dismissible fade show" role="alert">Pelanggan Tidak Memiliki Tagihan.<button class="btn btn-close position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>'); 
                return redirect('/admin/bayar-tagihan');
            }
        }else{
            Session::flash('dataTidakAda', '<div class="alert d-flex align-items-center alert-danger alert-dismissible fade show" role="alert">Pelanggan Tidak Ditemukan. Cek Kembali Kode Pelanggan!<button class="btn btn-close position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>'); 
            return redirect('/admin/bayar-tagihan');
        }
    }
    public function actionBayarTagihanAll(Request $input){
        $save = DB::table('pemakaians')
            ->where('kodeTagihan','=', $input->in_kodeTagihan)
            ->update(['metode'=>$input->in_metode,'status'=>'1']);

        return view('tagihan/bayarSuksesDetail',['kode'=>$input->in_kodeTagihan,'metode'=>$input->in_metode]);
    }
}
