@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

<div class="content">
    {{-- Content --}}
    <div class="container text-start">
        <h2 class="text-start text-dark mb-4">
            <strong> Transkrip Mata Kuliah </strong>
        </h2>
        <table class="table table-borderless">
            <tr>
                <td>Nama</td>
                <td>:</td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>:</td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary">
            Lihat Transkrip
        </button>
    </div>
</div>

@endsection
