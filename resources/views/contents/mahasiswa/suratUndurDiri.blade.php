@extends('dashboard')

@section('title', 'Surat Mengundurkan Diri')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container mb-3">
                    <h2 class="fw-bold">Surat Mengundurkan Diri</h2>
                </div>
                <div class="mt-2">
                    <div class="card text-bg-light">
                        <div class="card-body">
                            <table class="table table-borderless align-middle text-start small table-responsive-sm"
                                style="box-shadow: 0 0; margin-bottom: -0.1em">
                                <tbody>
                                    <tr>
                                        <td width="130px"><strong>NRP</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="300px">{{ auth()->user()->NRP }}</td>
                                    </tr>
                                    <tr>
                                        <td width="130px"><strong>Nama</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="300px">{{ auth()->user()->nama }}</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="130px"><strong>Departemen</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="300px">{{ auth()->user()->departemen }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mb-5 mt-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#createData">
                        <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Ajukan Surat</span>
                    </button>
                    </a>
                </div>

                <div class="modal fade" id="createData" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Surat Mengundurkan Diri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form class="form-inline" id="input" action="/surat/UndurDiri/store" method="POST">
                                <div class="modal-body">
                                    @csrf
                                    <div class="form-floating">
                                        <select class="form-select" id="type" name="periode" required>
                                            <option selected disabled value="">Pilih</option>
                                            <option value="Ganjil 2022">Ganjil 2022</option>
                                            <option value="Genap 2021">Genap 2021</option>
                                        </select>
                                        <label for="type">Periode</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <textarea for="alasan" class="form-control" name="alasan" placeholder="Alasan" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="alasan">Alasan</label>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if($undur->count())
                    <table class="table table-responsive table-striped table-hover table-bordered text-center align-middle">
                        <thead>
                            <tr class="table-secondary">
                                <th width="50px">No</th>
                                <th width="100px">Periode</th>
                                <th width="200px">Pengajuan</th>
                                <th width="300px">Alasan</th>
                                <th width="100px">Status</th>
                                <th width="100px">Cetak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($undur as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->periodeMundur }}</td>
                                    <td>{{ Carbon::parse($u->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }}</td>
                                    <td>{{ $u->alasanMundur }}</td>
                                    @if ($u->status == true)
                                        <td><span class="badge text-bg-success shadow-sm">Disetujui</span></td>
                                        <td>
                                            <a href="/surat/UndurDiri/cetak/{{ $u->id }}">
                                                <span><i class="bi bi-printer-fill fs-4"></i></span>
                                            </a>
                                        </td>
                                    @else
                                        <td><span class="badge text-bg-danger shadow-sm">Menunggu</span></td>
                                        <td>
                                            <a>
                                                <span><i class="bi bi-printer fs-4"></i></span>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </main>
    </div>

@endsection
