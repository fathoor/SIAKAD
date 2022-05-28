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
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">
                            Periode
                            <form name="period" action="/dosen/kuesioner/gantiPeriode" method="POST">
                                @csrf
                                <select id="periode" name="periode" onchange="this.form.submit();">
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
                                            {{ $k->tglAwal < date('Y-m-d') && $k->tglAkhir > date('Y-m-d') ? 'selected' : '' }}>
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
                            </form>
                        </h5>
                    </div>
                </div>

                <div>
                    <table class="table table-hover table-bordered align-middle text-center small">
                        <tr class="table-secondary">
                            <th width="250px">Kode Mata Kuliah</th>
                            <th width="130px">Pertanyaan 1</th>
                            <th width="130px">Pertanyaan 2</th>
                            <th width="130px">Pertanyaan 3</th>
                        </tr>
                        @foreach ($hasil as $h)
                            <?php
                    $d = auth()->user()->NRP;
                    ?>
                            @if ($h->dosenNRP == $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $h->kodeMK }}</td>

                                    {{-- Isian Kuisioner --}}

                                    <td>{{ $h->jawaban1 }}</td>
                                    <td>{{ $h->jawaban2 }}</td>
                                    <td>{{ $h->jawaban3 }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

            </div>
        </main>
    </div>


@endsection
