@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Berita Baru</h5>
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
                                @if ($berita->foto)
                                    <img src="../../fotoBerita/{{ $berita->foto }}" alt="Foto Lama"
                                        style="max-width: 100%; height: auto;">
                                @endif

                                <div class="form-group mb-3">
                                    <label for="foto">Thumbnail</label>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                                        accept="image/png, image/jpeg">
                                    @error('foto')
                                        <label for="foto" class="text-danger">{{ $message }}</label>
                                    @enderror
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
