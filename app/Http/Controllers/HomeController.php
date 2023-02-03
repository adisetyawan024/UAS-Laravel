<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\golongan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $gol = golongan::all();
        $data = DB::table('pelanggans')
            ->join('golongans', 'golongans.id', '=', 'pelanggans.golongan')
            ->select('pelanggans.*', 'golongans.kode as kode_gol')
            ->get();

        return view('home', ['data' => $data, 'dataGol' => $gol]);
    }
}
