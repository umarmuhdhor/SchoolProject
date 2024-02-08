@extends('murid/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Informasi</h5>
                        @foreach ($kelasMapel as $item)
                            <a href="{{ route('muridPengumumanKelas.index') }}" class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->mapelguru->mapel->mataPelajaran}}</h5>
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
