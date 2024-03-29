@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Mata Pelajaran
                            <a href="{{ route('adminMapel.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambah
                                    Mapel</span></a>
                        </h5>
                        @foreach ($mapel as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->mataPelajaran }}</h5>
                                        <p class="card-text"> kelas : {{ $item->kelas }}</p>
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
