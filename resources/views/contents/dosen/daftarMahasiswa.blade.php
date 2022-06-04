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
                    <input type="search" class="form-control" placeholder="&#xF52A;" style="font-family:'bootstrap-icons', Arial" name="search" value="{{ old('search') }}">
                </form>
            </div>
            <div class="container">
                <table class="table table-bordered table-hover table-striped align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th style="width: 50px">No</th>
                            <th style="width: 130px">NRP</th>
                            <th style="width: 300px">Nama</th>
                            <th style="width: 170px">Departemen</th>
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
                <div>
                    <a href="/dosen/daftarMahasiswa">
                        <button class="btn btn-danger">
                            <i class="bi bi-arrow-counterclockwise fs-6"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection