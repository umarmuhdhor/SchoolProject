@extends('murid/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            @if ($materi && count($materi) > 0)
                <h4 class="card-title fw-semibold mb-7">{{ $materi[0]->mataPelajaran }}</h4>
                @foreach ($materi as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->namaFile }}</h5>
                                <p class="card-text">{{ $item->guru['nama'] }}</p>
                                <a href="{{ asset('materi/' . $item->file) }}" class="btn btn-primary" download>Download
                                    File</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="card-title fw-semibold mb-7">Belum Ada Materi</h4>
            @endif

        </div>
    </div>
@endsection
