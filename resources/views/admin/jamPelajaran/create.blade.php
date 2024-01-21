@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Jam Pelajaran Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminJamPelajaran.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="tahunPeriode">Periode</label>
                                    <input type="time" class="form-control" name="jam" placeholder="contoh : 9:40:00"
                                        value="{{ old('jam') }}">
                                    @error('jam')
                                        <label for-"jam" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminJamPelajaran') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
