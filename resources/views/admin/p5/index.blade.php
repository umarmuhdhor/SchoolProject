@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">p5
                            <a href="{{ route('adminP5.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambah
                                    p5</span></a>
                        </h5>
                        @foreach ($p5 as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="fotop5/{{ $item->foto1 }}" class="card-img-top" alt="..."
                                        width="20" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text">{{ $item->isi }}</p>
                                        <a href="{{ route('adminP5.edit' , $item->id) }}" class="btn btn-primary">Edit</a>
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
