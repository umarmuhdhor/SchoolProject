@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Jabatan
                            <a href="{{ route('adminJabatan.create') }}"><span class="btn btn-outline-primary mx-3 ">Sesuaikan
                                    Jabatan</span></a>
                        </h5>
                        @foreach ($jabatan as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                    <div class="card-body">
                                        <h5 class="card-text">{{ $item->guru->nama }}</h5>
                                        <p class="card-title">{{ $item->jabatan }} || {{$item->status}}</p>
                                    </div>
                                    <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
