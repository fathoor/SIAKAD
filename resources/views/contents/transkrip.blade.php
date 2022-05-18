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
            <div class="container text-start">
                <h2 class="text-start text-dark mb-4">
                    <strong> Transkrip Mata Kuliah </strong>
                </h2>
                <table width="600px" class="table table-borderless">
                    <tr>
                        <td width="100px">Nama</td>
                        <td width="50px">:</td>
                        <td width="450px"></td>
                    </tr>
                    <tr>
                        <td width="100px">NRP</td>
                        <td width="50px">:</td>
                        <td width="450px"></td>
                    </tr>
                </table>
                <button type="button" class="btn btn-primary">
                    Lihat Transkrip
                </button>
            </div>
        </div>
    </main>
</div>

@endsection
