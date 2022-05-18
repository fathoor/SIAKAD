@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

    <div class="content">
        {{-- Content --}}
        <div class="container text-center">
            <h2 class="text-center text-dark mb-4">
                <strong> Transkrip Mata Kuliah </strong>
            </h2>
            <table class="table table-borderless text-start">
                <tr>
                    <td>NRP/Nama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>SKS Tempuh / SKS Normal</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <table class="table table-borderless">
                <tr>
                    <td>Format</td>
                    <td>:</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pilih
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Webpage</a></li>
                                <li><a class="dropdown-item" href="#">Plain HTML</a></li>
                                <li><a class="dropdown-item" href="#">Microsoft Word Document</a></li>
                                <li><a class="dropdown-item" href="#">Microsoft Excel Spreadsheet</a></li>
                            </ul>
                        </div>
                    </td>
                    <td><button type="button" class="btn btn-primary">
                            Cetak Transkrip
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>

@endsection
