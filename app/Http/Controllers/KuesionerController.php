<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuesioner;

class KuesionerController extends Controller
{
    public function index()
    {
        $kuesioner = Kuesioner::where([
            ['NRP', auth()->user()->NRP],
            ['status', '=', false]
        ])->first();
        return view('contents.kuesioner', ['kuesioner' => $kuesioner]);
    }
}
