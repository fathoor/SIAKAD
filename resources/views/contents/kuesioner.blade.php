@extends('dashboard')

@section('title', 'Kuesioner')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container text-center">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">Periode : Gasal 2022 </h5>
                    </div>
                </div>
                <div class="my-3" style="color: red"> Mohon mengisi kuesioner sebelum 30 Juni 2022 </div>
                <div>
                    <table class="table table-hover table-bordered align-middle text-center small">
                        <tr class="table-secondary">
                            <th width="250px">Mata Kuliah</th>
                            <th width="350px">Dosen</th>
                            <th width="130px">Kuesioner</th>
                        </tr>
                        <tr>
                            <td>Rancang Bangun Perangkat Lunak</td>
                            <td>Radityo Prasetianto Wibowo, S.Kom., M.Kom</td>
                            <td><i class="bi bi-x-square" style="color:red; margin-right:20px"></i><button type="button"
                                    class="btn btn-warning btn-sm"><a href="/kuesioner-2">isi</a></button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
    </div>

@endsection
