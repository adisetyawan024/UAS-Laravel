<?php

namespace App\Http\Controllers;

use Http\App\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __construct(Request $request)
    {
    }

    public function index()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {

        $input = $request->all();

        $request->validate(
            [
                'nama' => 'required',
                'password' => 'required'

            ],
            [
                'nama.required' => 'username tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong'
            ]
        );

        $data = DB::table('admins')
            ->where('nama', $input['nama'])
            ->where('password', sha1("CatatAir" . md5($input['password'])))
            ->first();
        if ($data) {
            session([
                'nama' => $data->nama,
                'password' => $data->password,
                'role' => $data->role
            ]);
            return redirect()->intended('/home');
        } else {
            return back()->withErrors([
                'nama' => 'Maaf nama dan password anda salah'
            ])->onlyInput('nama');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
