<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    public function     indexMahasiswa()
    {
        $mk1 = DB::table('mata_kuliah')->where('semester', '1')->get();
        $mk2 = DB::table('mata_kuliah')->where('semester', '2')->get();
        $mk3 = DB::table('mata_kuliah')->where('semester', '3')->get();
        $mk4 = DB::table('mata_kuliah')->where('semester', '4')->get();

        return view(
            'contents.kurikulum',
            [
                'mk1' => $mk1,
                'mk2' => $mk2,
                'mk3' => $mk3,
                'mk4' => $mk4
            ]
        );
    }
    public function indexDosen()
    {
        $mk1 = DB::table('mata_kuliah')->where('semester', '1')->get();
        $mk2 = DB::table('mata_kuliah')->where('semester', '2')->get();
        $mk3 = DB::table('mata_kuliah')->where('semester', '3')->get();
        $mk4 = DB::table('mata_kuliah')->where('semester', '4')->get();
        $mk5 = DB::table('mata_kuliah')->where('semester', '5')->get();
        $mk6 = DB::table('mata_kuliah')->where('semester', '6')->get();
        $mk7 = DB::table('mata_kuliah')->where('semester', '7')->get();

        return view(
            'contents.dosen.kurikulum',
            [
                'mk1' => $mk1,
                'mk2' => $mk2,
                'mk3' => $mk3,
                'mk4' => $mk4,
                'mk5' => $mk5,
                'mk6' => $mk6,
                'mk7' => $mk7,
            ]
        );
    }
    public function indexStaff()
    {
        $mk = DB::table('mata_kuliah')->get();
        return view('contents.staff.kurikulum', ['mk' => $mk]);
    }
}
