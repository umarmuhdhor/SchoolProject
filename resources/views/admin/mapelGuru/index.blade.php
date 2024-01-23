@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Pengajar
                            <a href="{{ route('adminMapelGuru.create') }}"><span class="btn btn-outline-primary mx-3 ">Sesuaikan Pengajar</span></a>
                        </h5>
                        @foreach ($mapelGuru as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->kelas }}</h5>
                                        <p class="card-text">{{ $item->mataPelajaran }}</p>
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
