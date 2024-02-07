@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Periode Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminPeriode.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="tahunPeriode">Periode</label>
                                    <input type="text" class="form-control" name="tahunPeriode" placeholder="contoh : 2021/2022"
                                        value="{{ old('tahunPeriode') }}">
                                    @error('tahunPeriode')
                                        <label for-"tahunPeriode" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername1">Semester</label>
                                    <select name="semester" class="form-control">
                                        <option value="genap">Genap</option>
                                        <option value="ganjil">Ganjil</option>
                                    </select>
                                    {{-- @error('fakultas_id')
                                        <label for="nama" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminPeriode') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
