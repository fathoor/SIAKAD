@extends('dashboard')

@section('title', 'Kelas ' . $kode)

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            @foreach($mk as $m)
            @if($m->kodeMataKuliah == $kode)
            <div class="row text-center">
                <h2 class="fw-bold">{{ $m->namaMataKuliah }}</h2>
            </div>
            @foreach($dosen as $d)
            @if($d->dosenKodeMK == $m->kodeMataKuliah)
            <div class="mb-4">
                <span class="badge text-bg-light shadow-sm">{{ $d->dosenNama }}</span>
            </div>
            @endif
            @endforeach
            @endif
            @endforeach
            <div>
                <table class="table table-hover table-striped table-bordered align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peserta as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->NRP }}</td>
                            <td>{{ $p->nama }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <a href="/dosen/mataKuliah">
                    <button class="btn btn-danger">
                        <i class="bi bi-arrow-counterclockwise fs-5"></i>
                    </button>
                </a>
            </div>
        </div>
    </main>
</div>

@endsection