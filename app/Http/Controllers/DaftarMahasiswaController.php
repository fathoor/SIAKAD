<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarMahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = User::where('type', 0)->orderBy('NRP', 'asc')->paginate(10);

        return view('contents.dosen.daftarMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $mahasiswa = User::where([['type', '=', 0], ['nama', 'LIKE', "%{$search}%"]])
        ->orWhere([['type', '=', 0], ['NRP', 'LIKE', "%{$search}%"]])
        ->orderBy('NRP', 'asc')->paginate(10);

		return view('contents.dosen.daftarMahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}