{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Dashboard')

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

{{-- Header --}}
@include('components.header')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        @yield('main')
    </main>
</div>

{{-- Footer --}}
@include('components.footer')

@endsection