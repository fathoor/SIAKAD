{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Cetak Surat ' . $type)

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

<div class="container">
    <main>
        <div class="content">
            <h2 class="fw-bold">
                @if($type == 'UndurDiri')
                Surat Mengundurkan Diri
                @else
                Surat {{ $type }}
                @endif
            </h2>
        </div>
    </main>
</div>

{{-- Footer --}}
@include('components.footer')