@extends('dashboard')

@section('title', 'Pembayaran Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Historis Pembayaran Mahasiswa</h2>
            </div>
            <div class="my-4">
                <table class="table table-hover table-striped table-bordered align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th width="150px">NRP</th>
                            <th width="300px">Nama Mahasiswa</th>
                            <th width="170px">Tahun Semester</th>
                            <th width="110px">Status</th>
                            <th width="100px">Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tagihan as $t)
                        <tr>
                            <td>{{ $t->NRP }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->periodeTagihan }}</td>
                            @switch($t->status)
                                @case(1)
                                    <td><span class="badge text-bg-success shadow-sm">Lunas</span></td>
                                @break

                                @case(0)
                                    <td><span class="badge text-bg-danger shadow-sm">Belum Lunas</span></td>
                                @break
                            @endswitch
                            <td>
                                <form action="/staff/ukt/detail" method="POST">
                                    @csrf
                                    <input type="hidden" name="periode" value="{{ $t->periodeTagihan }}">
                                    <input type="hidden" name="NRP" value="{{ $t->NRP }}">
                                    <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-envelope-paper-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tagihan->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection
