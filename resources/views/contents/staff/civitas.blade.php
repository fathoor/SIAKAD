@extends('dashboard')

@section('title', 'Civitas')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="text-center mb-1">
                <h2 class="fw-bold">Daftar Civitas</h2>
            </div>
            <div>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                    <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Create</span>
                </button>
            </div>
            <div class="modal fade" id="modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <form action="/staff/civitas/store" id="akun" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="number" id="NRP" name="NRP" class="form-control" required>
                                    <label for="NRP" class="form-label">NRP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <label for="password" class="form-label">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" id="email" name="email" class="form-control" value="@is.its.ac.id" required>
                                    <label for="email" class="form-label">Email</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select" id="type" name="type" required>
                                        <option selected value="0">Mahasiswa</option>
                                        <option value="1">Dosen</option>
                                    </select>
                                    <label for="type">Tipe</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-primary" form="akun">
                                <i class="bi bi-save fs-6"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <table class="table table-responsive table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th style="width: 100px">NRP</th>
                            <th style="width: 300px">Nama Lengkap</th>
                            <th style="width: 250px">Email</th>
                            <th style="width: 72px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($akun as $a)
                        <tr>
                            <td>{{ $a->NRP }}</td>
                            <td>{{ $a->nama }}</td>
                            <td>{{ $a->email }}</td>
                            <td>
                                <div class="badge text-bg-danger shadow-sm"><a href="/staff/civitas/delete/{{ $a->NRP }}"><i class="bi bi-trash-fill"></i></a></div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $akun->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection