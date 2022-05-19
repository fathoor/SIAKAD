{{-- Auth --}}
@auth

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

{{-- Main Content --}}
@yield('main')

{{-- Footer --}}
@include('components.footer')

@endsection

@endauth