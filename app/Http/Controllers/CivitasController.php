<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CivitasController extends Controller
{
    public function index()
    {
        $akun = User::orderBy('NRP', 'ASC')->paginate(10);

        return view('contents.staff.civitas', ['akun' => $akun]);
    }

    public function store(Request $request)
    {
        User::create([
            'NRP' => $request->NRP,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'NIK' => null,
            'tempatLahir' => null,
            'tanggalLahir' => null,
            'nomorTelp' => null,
            'email' => $request->email,
            'departemen' => 'Sistem Informasi',
            'tahunMasuk' => null,
            'alamat' => null,
            'type' => $request->type
        ]);

        return redirect('/staff/civitas');
    }

    public function update(Request $request, $NRP)
    {
        User::where('NRP', $NRP)->update([
            'NRP' => $request->NRP,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'type' => $request->type
        ]);

        return redirect('/staff/civitas');
    }

    public function delete($NRP)
    {
        User::where('NRP', $NRP)->delete();

        return redirect('/staff/civitas');
    }
}
