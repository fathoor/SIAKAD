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

        {{-- Footer --}}
        @include('components.footer')
    </div>
@endsection
