@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}

                @if (session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="container mb-2">
                    <h2 class="fw-bold">Transkrip Mata Kuliah</h2>
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
                                    <tr>
                                        <td width="130px"><strong>Format</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="300px">
                                            <form action="/transkrip/view" id="input" method="POST">
                                                @csrf
                                                <select name="format" class="form-select form-select-sm">
                                                    <option value="1">Webpage</option>
                                                    <option value="2">Plain HTML</option>
                                                    <option value="3">Microsoft Word Document</option>
                                                    <option value="4">Microsoft Excel Spreadsheet</option>
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" form="input" class="btn btn-primary">
                        <i class="bi bi-journals me-2"></i>Lihat Transkrip
                    </button>
                </div>
            </div>
        </main>
    </div>
@endsection
