@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Berita Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminBerita.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <label for="judul" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="deskripsi">deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="4" placeholder="Penggalan Berita">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <label for="deskripsi" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                                        value="{{ old('foto') }}" accept="image/png, image/jpeg">
                                    @error('foto')
                                        <label for="foto" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="link">link</label>
                                    <input type="text" class="form-control" name="link" placeholder="link"
                                        value="{{ old('link') }}">
                                    @error('link')
                                        <label for="link" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>
                                <input type="hidden" name="idKelasMurid" value="{{ $idKelasMurid }}">


                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminBerita') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
