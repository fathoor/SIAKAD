<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BiodataController extends Controller
{
    public function index()
    {
        $akun = User::get();

        return view('contents.biodata.index', ['akun' => $akun]);
    }

    public function edit()
    {
        $akun = User::where('NRP', auth()->user()->NRP)->get();

        return view('contents.biodata.edit', ['akun' => $akun]);
    }

    public function update(Request $request)
	{
		User::where('NRP', auth()->user()->NRP)->update([
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
