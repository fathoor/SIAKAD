{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Home')

{{-- Body --}}
@section('bg', 'bg-blue')

{{-- Content --}}
@section('content')

<div class="container bg-blue">
    {{-- Content --}}
    <div class="content">
        <div class="form">
            {{-- Logo --}}
            <a href="/dashboard"> {{-- sementara masuk dashboard lewat sini --}}
                <img src="/img/siakad_putih.png" class="img-fluid">
            </a>
            <div>
                {{-- Form login sementara --}}
                <form>
                    @csrf
                    
                    <div class="form-floating mt-4 shadow-sm">
                        <input type="text" id="username" class="form-control shadow-p bg-transparent text-white" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mt-3 shadow-sm">
                        <input type="password" id="password" class="form-control shadow-p bg-transparent text-white" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid mt-3 shadow">
                        <button class="btn btn-light btn-lg shadow-p" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('components.footer')
</div>