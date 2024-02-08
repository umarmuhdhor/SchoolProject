@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Berita Baru // blm biso diedit</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminBerita.update', $berita->idBerita) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judulBerita">Judul Berita</label>
                                    <input type="text" class="form-control" name="judulBerita" placeholder="Judul"
                                        value="{{ old('judulBerita', $berita->judulBerita) }}">
                                    @error('judulBerita')
                                        <label for="judulBerita" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control" name="sinopsis" rows="4" placeholder="Penggalan Berita">{{ old('sinopsis', $berita->sinopsis) }}</textarea>
                                    @error('sinopsis')
                                        <label for="sinopsis" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiBerita">Isi Berita</label>
                                    <textarea class="form-control" name="isiBerita" rows="8" placeholder="Isi Berita">{{ old('berita', $berita->isiBerita) }}</textarea>
                                    @error('isiBerita')
                                        <label for="isiBerita" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <!-- Tampilkan gambar yang lama -->
                                @if ($berita->thumbnail)
                                    <img src="../../fotoBerita/{{ $berita->thumbnail }}" alt="Foto Lama"
                                        style="max-width: 100%; height: auto;">
                                @endif

                                <div class="form-group mb-3">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail" placeholder="Foto"
                                        accept="image/png, image/jpeg">
                                    @error('thumbnail')
                                        <label for="thumbnail" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="foto1">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto1" placeholder="foto tambahan"
                                        value="{{ old('foto1') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto2">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto2" placeholder="foto tambahan"
                                        value="{{ old('foto2') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto3">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto3" placeholder="foto tambahan"
                                        value="{{ old('foto3') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto4">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto4" placeholder="foto tambahan"
                                        value="{{ old('foto4') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto5">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto5" placeholder="foto tambahan"
                                        value="{{ old('foto5') }}" accept="image/png, image/jpeg">
                                </div>



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
