@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Berita Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('berita.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judulBerita">Judul Berita</label>
                                    <input type="text" class="form-control" name="judulBerita" placeholder="Judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <label for-"judulBerita" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sinopsis">Sinopsis</label>
                                    <input type="text" class="form-control" name="sinopsis"
                                        placeholder="Penggalan Berita" value="{{ old('sinopsis') }}">
                                    @error('sinopsis')
                                        <label for-"sinopsis" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiBerita">Isi Berita</label>
                                    <input type="text" class="form-control" name="isiBerita" placeholder="Isi Berita"
                                        value="{{ old('berita') }}">
                                    @error('berita')
                                        <label for-"isiBerita" class="text-danger">{{ $message }}</label>
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
                                <a href="{{ url('berita') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
