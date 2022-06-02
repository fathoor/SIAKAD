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
            <div class="row justify-content-between">
                @foreach($mk as $m)
                <div class="col-lg-4 col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            {{-- <a href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}" class="stretched-link"></a> --}}
                            <a href="#collapse{{ $m->kodeMataKuliah }}" class="stretched-link" data-bs-toggle="collapse" href="#collapse{{ $m->kodeMataKuliah }}" aria-expanded="false" aria-controls="collapse{{ $m->kodeMataKuliah }}"></a>
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
                                        @foreach($peserta as $p)
                                        @if($p->kodeMK == $m->kodeMataKuliah)
                                        <span class="badge text-bg-secondary shadow-sm">{{ $p->total }}</span>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapse{{ $m->kodeMataKuliah }}">
                        <div class="text-center mt-4">
                            <a class="btn btn-light me-2 shadow-sm fw-bold" href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}/A">A</a>
                            <a class="btn btn-light me-2 shadow-sm fw-bold" href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}/B">B</a>
                            <a class="btn btn-light me-2 shadow-sm fw-bold" href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}/C">C</a>
                            <a class="btn btn-light me-2 shadow-sm fw-bold" href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}/D">D</a>
                            <a class="btn btn-light me-2 shadow-sm fw-bold" href="/dosen/mataKuliah/{{ $m->kodeMataKuliah }}/I">IUP</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $mk->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection