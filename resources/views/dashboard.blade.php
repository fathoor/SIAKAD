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
        {{-- /view/contents/ --}}
        @yield('main')
    </main>

    {{-- Footer --}}
    @include('components.footer')
</div>
