@extends('dashboard')

@section('title', 'Kurikulum')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Data Kurikulum Program Studi</h2>
                <h5 class="fw-semibold mt-4">Tahun Kurikulum 2018</h5>
            </div>
            <div class="mt-2">
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 1</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk1 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 2</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk2 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 3</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk3 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 4</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk4 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 5</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk5 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 6</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk6 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 7</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="100px">Kode</th>
                        <th width="350px">Mata Kuliah</th>
                        <th width="60px">SKS</th>
                    </tr>
                    @foreach ($mk7 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
