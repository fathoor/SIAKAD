<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kyslik\ColumnSortable\Sortable;
use App\Models\MataKuliah;

class KurikulumController extends Controller
{
    public function indexMahasiswa()
    {
        $mk1 = MataKuliah::where('semester', '1')->get();
        $mk2 = MataKuliah::where('semester', '2')->get();
        $mk3 = MataKuliah::where('semester', '3')->get();
        $mk4 = MataKuliah::where('semester', '4')->get();
        $mk5 = MataKuliah::where('semester', '5')->get();
        $mk6 = MataKuliah::where('semester', '6')->get();
        $mk7 = MataKuliah::where('semester', '7')->get();

        return view(
            'contents.mahasiswa.kurikulum',
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
    public function indexDosen()
    {
        $mk1 = MataKuliah::where('semester', '1')->get();
        $mk2 = MataKuliah::where('semester', '2')->get();
        $mk3 = MataKuliah::where('semester', '3')->get();
        $mk4 = MataKuliah::where('semester', '4')->get();
        $mk5 = MataKuliah::where('semester', '5')->get();
        $mk6 = MataKuliah::where('semester', '6')->get();
        $mk7 = MataKuliah::where('semester', '7')->get();

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
        $mk = MataKuliah::sortable()->paginate(10);
        
        return view('contents.staff.kurikulum', ['mk' => $mk]);
    }

    public function create(Request $request){
        MataKuliah::create($request -> all());

        return redirect('/staff/kurikulum');
    }

    public function update(Request $request,$id){
        $mk = MataKuliah::findOrFail($id);
        $mk->update($request -> all());

        return redirect('/staff/kurikulum');
    }

    public function delete($id){
        $mk = MataKuliah::find($id);
        $mk -> delete($mk);

        return redirect('/staff/kurikulum');
    }
}
