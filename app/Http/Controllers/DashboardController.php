<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('contents.mahasiswa.profile');
    }

    public function indexDosen()
    {
        return view('contents.dosen.profile');
    }

    public function indexStaff()
    {
        return view('contents.staff.profile');
    }
}
