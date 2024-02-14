@extends('murid/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-semibold mb-7">Informasi Kelas</h4>
            @foreach ($informasi as $item)
                <div class="col-md-12 mb-3">
                    <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                        <div class="card-body">
                            <h2><span style="text-transform: capitalize;">
                                    {{ $item->judul }}</span></h2>
                            <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                {{ $item->deskripsi }}
                            </p>
                            <a href="{{ $item->link }}">{{ $item->link }}</a>
                        </div>

                        <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                            @if ($item->jenis == 'latihan')
                                <a href="{{ route('muridLatihan' , $item->idInformasi) }}" class="btn btn-primary" style="margin: 5px">Kerjakan</a>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
