{{-- Auth --}}
@guest

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
            <a href="/">
                <img src="/img/siakad_logo_putih.svg" width="300px" class="img-fluid">
            </a>
            <div>
                <form action="/" method="POST">
                    @csrf
                    <div class="form-floating mt-4 shadow-sm">
                        <input type="text" name="NRP" id="NRP" class="form-control shadow-p bg-transparent text-white" placeholder="Username" autofocus required>
                        <label for="NRP">Username</label>
                    </div>
                    <div class="form-floating mt-3 shadow-sm">
                        <input type="password" name="password" id="password" class="form-control shadow-p bg-transparent text-white" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid mt-4 shadow">
                        <button class="btn btn-light btn-lg shadow-p" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

{{-- Footer --}}
@include('components.footer')

@endsection

@endguest