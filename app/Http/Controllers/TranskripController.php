<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranskripController extends Controller
{
    public function view(Request $request)
    {
        return view('contents.view-transkrip');
    }
}
