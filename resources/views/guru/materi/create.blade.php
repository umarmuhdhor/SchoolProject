@extends('guru/layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-semibold mb-7">{{ $mapel->mapel->mataPelajaran }}</h4>
            @foreach ($materi as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->namaFile }}</h5>
                            <p class="card-text">{{ $item->guru['nama'] }}</p>
                            <a href="{{ asset('materi/' . $item->file) }}" class="btn btn-primary" download>Download File</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-semibold mb-7">Tambahkan Materi</h4>

                    <form class="forms-sample" method="POST" action="{{ route('guruMateri.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="namaMateri">Nama Materi</label>
                            <input type="text" class="form-control" name="namaMateri" placeholder="Nama Materi"
                                value="{{ old('namaMateri') }}">
                            @error('namaMateri')
                                <label for-"namaMateri" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="namaFile">Nama File</label>
                            <input type="text" class="form-control" name="namaFile" placeholder="nama file"
                                value="{{ old('namaFile') }}">
                            @error('namaFile')
                                <label for-"namaFile" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                value="{{ old('deskripsi') }}">
                            @error('deskrispi')
                                <label for-"deskripsi" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="idGuru">Guru</label>

                            <!-- Menampilkan nama mapel sebagai teks -->
                            <span class="form-control">{{ Auth::user()->name }}</span>
                            <!-- Input tersembunyi untuk menyimpan nilai idGuru dari pengguna yang sedang login -->
                            <input type="hidden" name="idGuru" value="{{ $idGuru }}">
                        </div>


                        <div class="form-group mb-3">
                            <label for="idMapelGuru">Mapel</label>
                            <span class="form-control">{{ $mapel->mapel->mataPelajaran }} || {{$mapel->periode->tahunPeriode}}</span>
                            <input type="hidden" name="idMapelGuru" value="{{ $mapel->idMapelGuru }}">
                        </div>


                        <div class="form-group mb-3">
                            <label for="file">File</label>
                            <input type="file" class="form-control" name="file" placeholder="File"
                                value="{{ old('file') }}" accept=".docx, application/pdf">
                            @error('file')
                                <label for-"file" class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                        <a href="{{ url('guruMateri') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>

                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
