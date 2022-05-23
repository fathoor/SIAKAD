@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-start">
                <h2 class="text-start text-dark mb-4">
                    <strong> Surat Cuti </strong>
                </h2>

                <div class="formBox">
                    <form class="form-inline" id="input" action="">
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="NRP" class="col-3 col-form-label">NRP</label>
                            <label for="NRP" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="namaMahasiswa" class="col-3 col-form-label">Nama</label>
                            <label for="namaMahasiswa" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <input type="text" id="nama" name="nama" class="form-control bg-transparent border-white" value="{{ auth()->user()->nama }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>

                <a href="/suratCuti-2" class="btn btn-primary"> + Ajukan Surat</a>
                <br/>
                <br/>

                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Periode</th>
                        <th>Jumlah Smt Cuti</th>
                        <th>Diajukan</th>
                        <th>Alasan</th>
                        <th>Status</th>
                        <th>Cetak</th>
                    </tr>


                </table>

            </div>
        </div>
    </main>
</div>

@endsection

