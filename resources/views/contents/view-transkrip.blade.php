@extends('dashboard')

@section('title', 'Transkrip')


{{-- Content --}}
@section('main')

<div class="container" style="justify-content: flex-start">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="text-center text-dark mb-4">
                    <strong> Transkrip Mata Kuliah </strong>
                </h2>
                <table class="table table-borderless text-start">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ auth()->user()->nama }}</td>
                    </tr>
                    <tr>
                        <td>NRP</td>
                        <td>:</td>
                        <td>{{ auth()->user()->NRP }}</td>
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
            </div>
        </div>
    </main>
</div>

@endsection
