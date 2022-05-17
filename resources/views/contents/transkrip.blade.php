@extends('layouts.main')

{{-- Title --}}
@section('title', 'Transkrip')

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

    <div class="container">
        {{-- Header --}}
        @include('components.header')

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
        {{-- Footer --}}
        @include('components.footer')
    </div>
@endsection
