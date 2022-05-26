@extends('dashboard')

@section('title', 'Mata Kuliah')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Mata Kuliah</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($mk as $m)
                <div class="col-lg-5 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <a href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}" class="stretched-link"></a>
                            <div class="px-1">
                                <div class="text-start">
                                    <div>
                                        <h4 class="fw-bold">{{ $m->kodeMataKuliah }}</h4>
                                    </div>
                                    <div class="mb-2">
                                        <span>{{ $m->namaMataKuliah }}</span>
                                    </div>
                                    @foreach($dosen as $d)
                                    @if($d->dosenKodeMK == $m->kodeMataKuliah)
                                    <div class="mb-2">
                                        <span class="badge text-bg-light shadow-sm">{{ $d->dosenNama }}</span>
                                    </div>
                                    @endif
                                    @endforeach
                                    <div>
                                        <span class="badge text-bg-primary shadow-sm">{{ $m->kodeKelas }}</span>
                                        @foreach($kapasitas as $k)
                                        @if($k->kodeMK == $m->kodeMataKuliah)
                                        <span class="badge text-bg-secondary shadow-sm">{{ $k->total }} / {{ $m->kapasitas }}</span>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</div>

@endsection