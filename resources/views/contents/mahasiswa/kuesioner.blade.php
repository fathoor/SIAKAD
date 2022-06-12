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
            <div class="container">
                <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="d-flex flex-col mx-3">
                    <form name="period" action="/kuesioner/gantiPeriode" method="POST">
                        @csrf
                        <div class="form-floating">
                            <select class="form-select" id="periode" name="periode" onchange="this.form.submit();">
                                @foreach ($kuesioner as $k)
                                    <?php
                                    $period = $k->periode;
                                    $tahun = Str::substr($period, 0, 4);
                                    $semester = Str::substr($period, 4, 1);
                                    $akhir = Carbon::parse($k->akhirPengisian)
                                        ->locale('id')
                                        ->isoFormat('DD MMMM YYYY');
                                    ?>
                                    <option value="{{ $k->periode }}"
                                        {{ $k->periode == $smtper->periode ? 'selected' : '' }}>
                                        @switch($semester)
                                            @case('A')
                                                Ganjil {{ $tahun }}
                                            @break

                                            @case('B')
                                                Genap {{ $tahun }}
                                            @break
                                        @endswitch
                                    </option>
                                @endforeach
                            </select>
                            <label for="periode" class="form-label">Periode</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-2" style="color: red">
                @if ($periode->awalPengisian < date('Y-m-d') && $periode->akhirPengisian > date('Y-m-d'))
                    Mohon mengisi kuesioner sebelum {{ $akhir }}
                    <?php $masa = true; ?>
                @else
                    Belum dalam masa pengisian
                    <?php $masa = false; ?>
                @endif
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped table-bordered align-middle text-center small">
                    <thead>
                        <tr class="table-secondary">
                            <th width="350px">Mata Kuliah</th>
                            <th width="350px">Dosen</th>
                            <th width="100px">Status</th>
                            <th width="100px">Kuesioner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matkul as $mk)
                        <tr>
                            <td>{{ $mk->namaMataKuliah }} ({{ $mk->kelas }})</td>
                            <td>{{ $mk->dosenNama }}</td>
                            <td>
                                @if($mk->kuesioner == '0')
                                <span class="badge text-bg-danger shadow-sm">Belum Terisi</span>
                                @else
                                <span class="badge text-bg-success shadow-sm">Sudah Terisi</span>
                                @endif
                            </td>
                            <td>
                                <form action="/kuesioner/isi" method="POST">
                                    @csrf
                                    <input name="isiDosen" type="hidden" value={{ $mk->dosenNRP }}>
                                    <input name="isiMK" type="hidden" value={{ $mk->kodeMK }}>
                                    <select name="periode" hidden>
                                        @foreach ($kuesioner as $k)
                                        <option value="{{ $k->periode }}"
                                            {{ $k->periode == $smtper->periode ? 'selected' : '' }}>
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($mk->kuesioner == '0' && $masa)
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            <i class="bi bi-inboxes-fill"></i>
                                        </button>
                                    @else
                                        <button type="submit" disabled class="btn btn-secondary btn-sm">
                                            <i class="bi bi-inboxes-fill"></i>
                                        </button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
