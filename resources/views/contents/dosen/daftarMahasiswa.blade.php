@extends('dashboard')

@section('title', 'Daftar Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            <div class="container">
                <h2 class="fw-bold">Daftar Mahasiswa</h2>
            </div>
            <div class="row mt-1 mb-3">
                <form class="form" action="/dosen/daftarMahasiswa/search" method="GET">
                    <input type="search" class="form-control" placeholder="Cari..." name="search" value="{{ old('search') }}">
                </form>
            </div>
            <div class="mt-4">
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
                            <td>{{ $mahasiswa->firstItem() + $loop->index }}</td>
                            <td>{{ $m->NRP }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->departemen }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $mahasiswa->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection