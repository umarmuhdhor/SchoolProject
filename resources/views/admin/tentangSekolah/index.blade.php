@extends('admin/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-semibold mb-7">Tentang Sekolah</h4>
            @foreach ($tentangSekolah as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->tentang }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-semibold mb-7">Tambahkan Materi</h4>

                    <form class="forms-sample" method="POST" action="{{ route('adminTentangSekolah.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="namaMateri">Tentang</label>
                            <input type="text" class="form-control" name="namaMateri" placeholder="Nama Materi"
                                value="{{ old('namaMateri') }}">
                            @error('namaMateri')
                                <label for-"namaMateri" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="deskripsi">isi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                value="{{ old('deskripsi') }}">
                            @error('deskrispi')
                                <label for-"deskripsi" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                        <a href="{{ url('tentangSekolah') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
