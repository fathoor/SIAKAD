@extends('dashboard')

@section('title', 'Hasil Kuesioner')

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
                    <form name="period" action="/dosen/kuesioner/gantiPeriode" method="POST">
                        @csrf
                        <div class="form-floating">
                            <select class="form-select" id="periode" name="periode" onchange="this.form.submit();">
                                @foreach ($kuesioner as $k)
                                    <?php
                                    $period = $k->periode;
                                    $tahun = Str::substr($period, 0, 4);
                                    $semester = Str::substr($period, 4, 1);
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
                    Masa pengisian kuesioner belum selesai
                @endif
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped table-bordered align-middle text-center small">
                    <thead>
                        <tr class="table-secondary">
                            <th width="350px">Mata Kuliah</th>
                            <th width="100px">Kuesioner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matkul as $mk)
                        <tr>
                            <td>{{ $mk->namaMataKuliah }}</td>
                            <td>
                                <form action="/dosen/kuesioner/hasil" method="POST">
                                    @csrf
                                    <select name="periode" hidden>
                                        @foreach ($kuesioner as $k)
                                            <option value="{{ $k->periode }}"
                                                {{ $k->periode == $smtper->periode ? 'selected' : '' }}>
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="kodeMK" value="{{ $mk->kodeMataKuliah }}">
                                    <?php
                                    if ($hasil->where('kodeMK', $mk->kodeMataKuliah)->count() > 0) {
                                        $tersedia = true;
                                    } else {
                                        $tersedia = false;
                                    }
                                    ?>
                                    <button type="submit" {{ $tersedia == false ? 'disabled' : '' }} class="btn btn-warning btn-sm">
                                        <i class="bi bi-search"></i>
                                    </button>
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
