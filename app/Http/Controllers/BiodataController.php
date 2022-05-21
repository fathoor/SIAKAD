<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function index()
    {
        $user = DB::table('akun')->get();

        return view('contents.biodata', ['user' => $user]);
    }
}
