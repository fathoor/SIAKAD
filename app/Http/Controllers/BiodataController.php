<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function index()
    {
        $akun = DB::table('akun')->get();

        return view('contents.biodata', ['akun' => $akun]);
    }

    public function edit()
    {
        $akun = DB::table('akun')->where('NRP', auth()->user()->NRP)->get();

        return view('contents.biodataEdit', ['akun' => $akun]);
    }

    public function update(Request $request)
	{
		DB::table('akun')->where('NRP', auth()->user()->NRP)->update([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'nomorTelp' => $request->nomorTelp,
            'email' => $request->email,
            'alamat' => $request->alamat
		]);

		return redirect('/biodata');
	}
}
