{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Dashboard')

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

<div class="container">
    {{-- Header --}}
    @include('components.header')

    {{-- Content --}}
    <main class="content">
        Kosong
    </main>

    {{-- Footer --}}
    @include('components.footer')
</div>
