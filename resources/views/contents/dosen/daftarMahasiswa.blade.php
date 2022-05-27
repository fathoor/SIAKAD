@extends('dashboard')

@section('title', 'Daftar Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            <div class="text-center">
                <h2 class="fw-bold">Daftar Mahasiswa</h2>
            </div>
            <div class="row mt-1">
                <form class="form" action="/dosen/daftarMahasiswa/search" method="GET">
                    <input type="search" class="form-control" placeholder="Cari..." name="search" value="{{ old('search') }}">
                </form>
            </div>
            <div class="container">
                <table class="table table-bordered table-hover table-striped align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Departemen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->NRP }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->departemen }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection