<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('cekLevel');
    }

    public function index()
    {
        $dataAdmin = Admin::all();
        return view('setting/admin', ['dataAdmin' => $dataAdmin]);
    }
    public function tambah(Request $dataInput)
    {
        $simpan = new Admin;
        $simpan->nama = $dataInput->in_namaPelanggan;
        $simpan->whatsapp = $dataInput->in_nomorWA;
        $simpan->password = sha1("CatatAir" . md5($dataInput->in_passConf));
        $simpan->role = $dataInput->in_jabatan;
        $simpan->save();
        return redirect('/admin/setting-admin');
    }
    public function editPage($id)
    {
        $idDecode = substr(base64_decode($id), 8);

        $dataById = DB::table('admins')->where('id', $idDecode)->get();
        return view('setting/adminDetail', ['dataAdminById' => $dataById]);
    }
    public function saveEdit($id, Request $dataInput)
    {
        $idDecode = substr(base64_decode($id), 8);

        if ($dataInput->in_pass == "" || $dataInput->in_pass == NULL) {
            $dataUpdt = Admin::find($idDecode);
            $dataUpdt->nama = $dataInput->in_namaPelanggan;
            $dataUpdt->whatsapp = $dataInput->in_nomorWA;
            $dataUpdt->role = $dataInput->in_jabatan;
            $dataUpdt->save();
            return redirect('/admin/setting-admin');
        } else {
            $dataUpdt = Admin::find($idDecode);
            $dataUpdt->nama = $dataInput->in_namaPelanggan;
            $dataUpdt->whatsapp = $dataInput->in_nomorWA;
            $dataUpdt->password = sha1("CatatAir" . md5($dataInput->in_pass));
            $dataUpdt->role = $dataInput->in_jabatan;
            $dataUpdt->save();
            return redirect('/admin/setting-admin');
        }
    }
    public function hapus($id)
    {
        $idDecode = substr(base64_decode($id), 8);
        $hapus = Admin::find($idDecode);
        $hapus->delete();
        return redirect('/admin/setting-admin');
    }
}
