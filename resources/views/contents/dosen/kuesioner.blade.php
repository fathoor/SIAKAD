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

                <div class="row mb-4">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <div class="d-flex flex-row">
                    <div class=" d-flex flex-col mx-3">
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
                                                    Ganjil - {{ $tahun }}
                                                @break

                                                @case('B')
                                                    Genap - {{ $tahun }}
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

                <div class="my-3" style="color: red">
                    @if ($periode->awalPengisian < date('Y-m-d') && $periode->akhirPengisian > date('Y-m-d'))
                        Masa pengisian kuesioner belum selesai
                    @endif
                </div>

                <div>
                    <table class="table table-hover table-bordered align-middle text-center small">
                        <tr class="table-secondary">
                            <th width="250px">Mata Kuliah</th>
                            <th width="130px">Kuesioner</th>
                        </tr>
                        @foreach ($matkul as $mk)
                            <tr>
                                <td>{{ $mk->namaMataKuliah }}</td>
                                <td>
                                    <form action="/hasil-kuesioner" method="POST">
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
                                        <button type="submit" {{ $tersedia == false ? 'disabled' : '' }}
                                            class="btn btn-warning btn-sm">
                                            Hasil
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </main>
    </div>


@endsection
