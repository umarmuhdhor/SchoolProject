@extends('guru/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-semibold mb-7">Informasi Kelas</h4>
            @foreach ($informasi as $item)
                <div class="col-md-12 mb-3">
                    <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                        <div class="card-body">
                            <h2><span style="text-transform: capitalize;">
                                    {{ $item->judul }}</span></h2>
                            <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                {{ $item->deskripsi }}
                            </p>
                            <a href="{{$item->link}}">{{$item->link}}</a>
                        </div>
                        <div class="ml-auto"> <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                            <form action="{{ route('guruInformasiPerKelas.destroy', $item->idInformasi) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-semibold mb-7">Tambahkan Informasi Kelas</h4>

                    <form class="forms-sample" method="POST" action="{{ route('guruInformasiPerKelas.store') }}"
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
                        <input type="hidden" name="idKelasMapel" value="{{ $idKelasMapel }}">


                        <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                        <a href="{{ url('guruInformasiPerKelas') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
