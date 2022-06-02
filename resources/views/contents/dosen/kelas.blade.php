@extends('dashboard')

@section('title', 'Kelas ' . $kode . $kelas)

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row text-center">
                <h2 class="fw-bold">{{ $mk->namaMataKuliah }} [{{ $kelas }}]</h2>
            </div>
            <div class="mb-4">
                <span class="badge text-bg-light shadow-sm">{{ $mk->dosenNama }}</span>
            </div>
            <div>
                <table class="table table-hover table-striped table-bordered align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th style="width: 50px">No</th>
                            <th style="width: 130px">NRP</th>
                            <th style="width: 300px">Nama Mahasiswa</th>
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
                        <i class="bi bi-arrow-counterclockwise fs-6"></i>
                    </button>
                </a>
            </div>
        </div>
    </main>
</div>

@endsection