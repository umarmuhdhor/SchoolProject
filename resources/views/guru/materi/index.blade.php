@extends('guru/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Materi</h5>
                        @foreach ($mapel as $item)
                            <a href="{{ route('guruMateri.create', ['idMapel' => $item->idMapel]) }}" class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->mataPelajaran }}</h5>
                                        <p class="card-text">Kelas : {{ $item->kelas}}</p>

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
