@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Pengajar
                            <a href="{{ route('adminMapelGuru.create') }}"><span
                                    class="btn btn-outline-primary mx-3 ">Sesuaikan Pengajar</span></a>
                        </h5>
                        @foreach ($mapelGuru as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->guru->nama }}</h5>
                                        <p class="card-text">{{ $item->mapel->mataPelajaran }} || {{ $item->periode->tahunPeriode }}</p>
                                        <p class="card-text"></p>
                                    </div>
                                    <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                        <a class="btn btn-success">Sesuaikan</a>
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
