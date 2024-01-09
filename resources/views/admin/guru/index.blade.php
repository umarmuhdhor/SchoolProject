@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Guru
                            <a href="{{ route('adminGuru.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambah Data Guru</span></a>
                        </h5>
                        @foreach ($guru as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="fotoGuru/{{$item->foto}}" class="card-img-top" alt="..." width="20" height="230">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->nama}}</h5>
                                    <p class="card-text">{{$item->deskripsi}}</p>
                                    <a href="#" class="btn btn-primary">Edit</a>
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
