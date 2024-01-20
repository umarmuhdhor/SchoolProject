@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4">Periode
                            <a href="{{ route('adminPeriode.create') }}"><span class="btn btn-outline-primary mx-3 ">Tambahkan Periode</span></a>
                        </h5>
                        @foreach ($periode as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->tahunPeriode }}</h5>
                                        <p class="card-text">{{ $item->semester}}</p>
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
