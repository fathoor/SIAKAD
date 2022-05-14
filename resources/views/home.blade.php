{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Home')

{{-- Content --}}
@section('content')

<div class="container">
    {{-- Header --}}
    {{-- @include('components.header') --}}

    {{-- Content --}}
    <div class="content">
        <div class="form-box">
            <a href="/" title="SIAKAD ITS">
                <img src="/img/siakad_putih.png" alt="SIAKAD ITS" class="img-fluid">
            </a>
            <div>
                <form>
                    @csrf
                    
                    <div class="form-floating mt-4">
                        <input type="text" id="username" class="form-control shadow-p bg-transparent text-white" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" id="password" class="form-control shadow-p bg-transparent text-white" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid mt-3">
                        <button class="btn btn-light btn-lg shadow-p" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('components.footer')
</div>