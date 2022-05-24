<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarKuesioner;

class DaftarKuesionerController extends Controller
{
    public function index()
    {
        $daftarKuesioner = DaftarKuesioner::where([
            ['NRP', auth()->user()->NRP],
            ['status', '=', false]
        ])->first();
        return view('contents.kuesioner', ['daftarKuesioner' => $daftarKuesioner]);
    }
}
