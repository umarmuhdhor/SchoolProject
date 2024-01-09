@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Prestasi Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminPrestasi.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judul">Judul Prestasi</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <label for-"judul" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sinopsis">Sinopsis</label>
                                    <input type="text" class="form-control" name="sinopsis"
                                        placeholder="Penggalan Prestasi" value="{{ old('sinopsis') }}">
                                    @error('sinopsis')
                                        <label for-"sinopsis" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiPrestasi">Isi Prestasi</label>
                                    <input type="text" class="form-control" name="isiPrestasi" placeholder="Isi Prestasi"
                                        value="{{ old('Prestasi') }}">
                                    @error('Prestasi')
                                        <label for-"isiPrestasi" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="foto">Thumbnail

                                    </label>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                                        value="{{ old('foto') }}" accept="image/png, image/jpeg">
                                    @error('foto')
                                        <label for-"foto" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminPrestasi') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
