@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Murid
                            <a href="{{ route('adminMurid.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambah Data
                                    Murid</span></a>
                        </h5>
                        @foreach ($murid as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nama }}</h5>
                                        <p class="card-text">{{ $item->status }}</p>
                                    </div>
                                    {{-- <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('adminKelasMurid.show', $item->idKelas) }}"
                                            class="btn btn-success">Tambahkan</a>
                                        <a href="{{ route('adminKelas.show', $item->idKelas) }}"
                                            class="btn btn-warning">Detail</a>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
