@extends('guru/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Kelas Saya
                        </h5>
                        {{-- <div class="row"> --}}
                            @foreach ($kelas as $item)
                                <div class="col-md-12 mb-3">
                                    <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->kelas->namaKelas }}</h5>
                                        </div>
                                        <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                            <a href="#" class="btn btn-primary">Informasi</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        {{-- </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
