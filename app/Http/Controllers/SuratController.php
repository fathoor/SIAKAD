<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SuratAktif;
use App\Models\SuratCuti;
use App\Models\SuratUndurDiri;

class SuratController extends Controller
{
    public function index($type)
    {
        switch($type){
            case 'Aktif':
                $aktif = SuratAktif::where('suratAktifNRP', auth()->user()->NRP)->get();

                return view('contents.mahasiswa.suratMahasiswa', ['aktif' => $aktif]);
                break;
            case 'Cuti':
                $cuti = SuratCuti::where('suratCutiNRP', auth()->user()->NRP)->get();

                return view('contents.mahasiswa.suratCuti', ['cuti' => $cuti]);
                break;
            case 'UndurDiri':
                $undur = SuratUndurDiri::where('suratUndurDiriNRP', auth()->user()->NRP)->get();

                return view('contents.mahasiswa.suratUndurDiri', ['undur' => $undur]);
                break;
        }
    }

    public function store(Request $request, $type)
    {
        switch($type){
            case 'Aktif':
                $today = Carbon::now()->format('Y-m-d');

                SuratAktif::create([
                    'suratAktifNRP' => auth()->user()->NRP,
                    'type' => 'Surat Keterangan Aktif',
                    'periodeAktif' => $request->periode,
                    'tanggalAjuan' => $today,
                    'keperluanSurat' => $request->keperluan,
                    'status' => false
                ]);

                return redirect('/surat/Aktif');
                break;
            case 'Cuti':
                $today = Carbon::now()->format('Y-m-d');

                SuratCuti::create([
                    'suratCutiNRP' => auth()->user()->NRP,
                    'type' => 'Surat Cuti',
                    'periodeCuti' => $request->periode,
                    'jumlahSemesterCuti' => $request->semester,
                    'tanggalAjuan' => $today,
                    'alasanCuti' => $request->alasan,
                    'status' => false
                ]);

                return redirect('/surat/Cuti');
                break;
            case 'UndurDiri':
                $today = Carbon::now()->format('Y-m-d');

                SuratUndurDiri::create([
                    'suratUndurDiriNRP' => auth()->user()->NRP,
                    'type' => 'Surat Mengundurkan Diri',
                    'periodeMundur' => $request->periode,
                    'tanggalAjuan' => $today,
                    'alasanMundur' => $request->alasan,
                    'status' => false
                ]);

                return redirect('/surat/UndurDiri');
                break;
        }
    }

    public function cetak($type, $id)
    {
        switch($type){
            case 'Aktif':
                $surat = SuratAktif::find($id)->first();
                break;
            case 'Cuti':
                $surat = SuratCuti::find($id)->first();
                break;
            case 'UndurDiri':
                $surat = SuratUndurDiri::find($id)->first();
                break;
        }

        return view('contents.mahasiswa.surat', ['type' => $type, 'surat' => $surat]);
    }

    public function indexStaff(Request $request)
    {
        if($request->type != ''){
            $type = $request->type;
        }else{
            $type = 'Surat Keterangan Aktif';
        }

        switch($type){
            case 'Surat Keterangan Aktif':
                $surat = SuratAktif::leftjoin('akun', 'akun.NRP', '=', 'surat_aktif.suratAktifNRP')->orderBy('tanggalAjuan', 'ASC')->orderBy('suratAktifNRP', 'ASC')->paginate(10);
                break;
            case 'Surat Cuti':
                $surat = SuratCuti::join('akun', 'akun.NRP', '=', 'surat_cuti.suratCutiNRP')->orderBy('tanggalAjuan', 'ASC')->orderBy('suratCutiNRP', 'ASC')->paginate(10);
                break;
            case 'Surat Mengundurkan Diri':
                $surat = SuratUndurDiri::join('akun', 'akun.NRP', '=', 'surat_undur_diri.suratUndurDiriNRP')->orderBy('tanggalAjuan', 'ASC')->orderBy('suratUndurDiriNRP', 'ASC')->paginate(10);
                break;
        }

        return view('contents.staff.surat', ['surat' => $surat, 'type' => $type]);
    }

    public function verificate(Request $request)
    {
        $type = $request->type;

        switch($type){
            case 'Surat Keterangan Aktif':
                SuratAktif::where([['suratAktifNRP', $request->nrpAktif], ['tanggalAjuan', $request->tanggalAktif]])->update([
                    'status' => filter_var($request->accept, FILTER_VALIDATE_BOOLEAN)
                ]);
                break;
            case 'Surat Cuti':
                SuratCuti::where([['suratCutiNRP', $request->nrpCuti], ['tanggalAjuan', $request->tanggalCuti]])->update([
                    'status' => filter_var($request->accept, FILTER_VALIDATE_BOOLEAN)
                ]);
                break;
            case 'Surat Mengundurkan Diri':
                SuratUndurDiri::where([['suratUndurDiriNRP', $request->nrpUndurDiri], ['tanggalAjuan', $request->tanggalUndurDiri]])->update([
                    'status' => filter_var($request->accept, FILTER_VALIDATE_BOOLEAN)
                ]);
                break;
        }

        return redirect('/staff/surat');
    }
}
