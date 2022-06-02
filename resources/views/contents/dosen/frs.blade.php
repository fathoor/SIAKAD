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
                <span class="badge text-bg-light shadow-sm">{{ $dosen->dosenNama }}</span>
            </div>
            <form class="row mb-4 justify-content-center" action="/dosen/FRS" method="POST">
                @csrf
                <div class="col-9">
                    <select class="form-select" name="periode">
                        <option value="" disabled selected>Periode</option>
                        <option value="Genap 2021">Genap 2021</option>
                        <option value="Ganjil 2021">Ganjil 2021</option>
                    </select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">
                        Ganti
                    </button>
                </div>
            </form>
            @foreach($mahasiswa as $m)
            @if($m->periode == $periode)
            <div class="row justify-content-center mb-4">
                <div class="card shadow-sm mb-4" style="width: 20rem">
                    <div class="card-body text-center">
                        <a href="#collapse{{ $m->NRP }}" class="stretched-link" data-bs-toggle="collapse" href="#collapse{{ $m->NRP }}" aria-expanded="false" aria-controls="collapse{{ $m->NRP }}"></a>
                        <div class="card-title">
                            <h4 class="fw-bold">{{ $m->NRP }}</h4>
                        </div>
                        <div class="card-text mb-1">
                            <div class="mb-2">{{ $m->nama }}</div>
                            @foreach($status as $s)
                            @if($s->NRP == $m->NRP)
                            @if($s->status == false)
                            <div class="badge text-bg-danger shadow-sm">Belum Disetujui</div>
                            @else
                            <div class="badge text-bg-success shadow-sm">Disetujui</div>
                            @endif
                            @endif
                            @endforeach
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
                        <tr class="{{ $f->matkulAtas == true ? 'table-warning' : '' }}">
                            <td>{{ $f->kodeMataKuliah }}</td>
                            <td>{{ $f->namaMataKuliah }}</td>
                            <td>{{ $f->sks }}</td>
                            <td>{{ $f->kelas }}</td>
                            <td>{{ $f->dosenNama }}</td>
                            <td>
                                @if($f->nilai == 0)
                                *
                                @elseif(0 < $f->nilai && $f->nilai <= 40)
                                E
                                @elseif(40 < $f->nilai && $f->nilai <= 55)
                                D
                                @elseif(55 < $f->nilai && $f->nilai <= 60)
                                C
                                @elseif(60 < $f->nilai && $f->nilai <= 65)
                                BC
                                @elseif(65 < $f->nilai && $f->nilai <= 75)
                                B
                                @elseif(75 < $f->nilai && $f->nilai <= 85)
                                AB
                                @elseif(85 < $f->nilai && $f->nilai <= 100)
                                A
                                @endif
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    <div class="text-center">
                        @foreach($status as $s)
                        @if($s->NRP == $m->NRP)
                        <div>
                            <form action="/dosen/FRS/accept{{ $m->NRP }}" method="POST">
                                @csrf
                                <button class="btn btn-success shadow-sm me-2" type="submit" name="accept" value="1">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                                <button class="btn btn-danger shadow-sm" type="submit" name="accept" value="0">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </form>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </main>
</div>

@endsection