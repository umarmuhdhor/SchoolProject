@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Jam Pelajaran
                            <a href="{{ route('adminJamPelajaran.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambahkan Jam Pelajaran</span></a>
                        </h5>
                        @foreach ($jam as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->jam }}</h5>
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
