@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Mapel Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminMapel.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="mataPelajaran">Nama Mapel</label>
                                    <input type="text" class="form-control" name="mataPelajaran" placeholder="Nama Mapel"
                                        value="{{ old('mataPelajaran') }}">
                                    @error('mataPelajaran')
                                        <label for-"mataPelajaran" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername1">Kelas</label>
                                    <select name="kelas" class="form-control">
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    {{-- @error('fakultas_id')
                                        <label for="nama" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminMapel') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
