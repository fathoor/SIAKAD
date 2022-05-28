@extends('dashboard')

@section('title', 'Formulir Rencana Studi')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row text-center mb-2">
                <h2 class="fw-bold">Formulir Rencana Studi</h2>
            </div>
            <div class="row mb-4">
                @foreach($dosen as $d)
                @if($d->dosenNRP == auth()->user()->NRP)
                <span class="badge text-bg-light shadow-sm">{{ $d->dosenNama }}</span>
                @endif
                @endforeach
            </div>
            @foreach($mahasiswa as $m)
            <div class="row justify-content-center mb-4">
                <div class="card shadow-sm mb-4" style="width: 20rem">
                    <div class="card-body text-center">
                        <a href="#collapse{{ $m->NRP }}" class="stretched-link" data-bs-toggle="collapse" href="#collapse{{ $m->NRP }}" aria-expanded="false" aria-controls="collapse{{ $m->NRP }}"></a>
                        <div class="card-title">
                            <h4 class="fw-bold">{{ $m->NRP }}</h4>
                        </div>
                        <div class="card-text mb-1">
                            <div class="mb-2">{{ $m->nama }}</div>
                            <div class="badge text-bg-danger shadow-sm">Belum Disetujui</div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapse{{ $m->NRP }}">
                    <table class="table table-responsive table-striped table-bordered table-fixed text-center">
                        <tr class="table-secondary">
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kelas</th>
                            <th>Dosen</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach($frs as $f)
                        @if($f->NRP == $m->NRP)
                        <tr>
                            <td>{{ $f->kodeMataKuliah }}</td>
                            <td>{{ $f->namaMataKuliah }}</td>
                            <td>{{ $f->sks }}</td>
                            <td>{{ $f->kelas }}</td>
                            <td>{{ $f->dosenNama }}</td>
                            @foreach($nilai as $n)
                            @if($n->NRP == $m->NRP && $n->kodeMK == $f->kodeMK)
                            <td>{{ $n->nilaiAngka }}</td>
                            @endif
                            @endforeach
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    <div class="text-center">
                        <a class="badge text-bg-primary shadow-sm" href="#">Setujui</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>

@endsection