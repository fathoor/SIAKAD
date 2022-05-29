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
                <div class="container text-center">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">
                            Periode
                            <form name="period" action="/kuesioner/gantiPeriode" method="POST">
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
                            </form>
                        </h5>
                    </div>
                </div>
                <div class="my-3" style="color: red">
                    @if ($periode->awalPengisian < date('Y-m-d') && $periode->akhirPengisian > date('Y-m-d'))
                        Mohon mengisi kuesioner sebelum {{ $akhir }}
                    @else
                        Belum dalam masa pengisian
                    @endif
                </div>

                <div>
                    <table class="table table-hover table-bordered align-middle text-center small">
                        <tr class="table-secondary">
                            <th width="250px">Mata Kuliah</th>
                            <th width="350px">Dosen</th>
                            <th width="130px">Kuesioner</th>
                        </tr>
                        @foreach ($matkul as $mk)
                            <tr>
                                <td>{{ $mk->namaMataKuliah }}</td>
                                <td>{{ $mk->dosenNama }}</td>
                                <td>
                                    <form action="/isi-kuesioner" method="POST">
                                        @csrf
                                        <input name="isiDosen" type="hidden" value={{ $mk->dosenNRP }}>
                                        <select name="periode" hidden>
                                            @foreach ($kuesioner as $k)
                                                <option value="{{ $k->periode }}"
                                                    {{ $k->periode == $smtper->periode ? 'selected' : '' }}>
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($mk->status == '0')
                                            <i class="bi bi-x-square" style="color:red; margin-right:20px"></i>
                                            <button type="submit" class="btn btn-warning btn-sm">
                                                Isi
                                            </button>
                                        @else
                                            <i class="bi bi-v-square" style="color:red; margin-right:20px"></i>
                                            <button type="submit" disabled class="btn btn-success btn-sm">
                                                Isi
                                            </button>
                                        @endif
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
