@extends('dashboard')

@section('title', 'Profile')

{{-- Content --}}
@section('main')

<div class="container justify-content-center">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content text-center">
            {{-- Isi disini --}}
            <div>
                <i class="bi bi-person-circle" style="font-size: 8rem"></i>
            </div>
            <div>
                <h1 class="display-3 fw-bold my-2">{{ auth()->user()->nama }}</h1>
            </div>
            <div>
                <h3 class="fw-semibold my-2">{{ auth()->user()->departemen }}</h3>
            </div>
            <div class="d-flex flex-row">
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="/dashboard/staff">
                        <i class="bi bi-clipboard2 fs-1"></i>
                    </a>
                </span>
            </div>
        </div>
    </main>
</div>

@endsection