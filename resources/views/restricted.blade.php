{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Restricted')

{{-- Body --}}
@section('bg', 'bg-blue')

{{-- Content --}}
@section('content')

<div class="container bg-blue">
    {{-- Content --}}
    <div class="content">
        <div>
            <i class="bi bi-shield-lock" style="font-size: 15rem"></i>
        </div>
        <div>
            <h1 class="display-5 fw-bold">Anda tidak memiliki akses</h1>
        </div>
        <div class="mt-4">
            @switch(auth()->user()->type)
                @case('dosen')
                    <a href="/dashboard/dosen">
                        <i class="bi bi-house" style="font-size: 3rem"></i>
                    </a>
                    @break
                @case('staff')
                    <a href="/dashboard/staff">
                        <i class="bi bi-house" style="font-size: 3rem"></i>
                    </a>
                    @break
                @case('mahasiswa')
                    <a href="/dashboard">
                        <i class="bi bi-house" style="font-size: 3rem"></i>
                    </a>
                    @break
            @endswitch
        </div>
    </div>
</div>

{{-- Footer --}}
@include('components.footer')

@endsection
