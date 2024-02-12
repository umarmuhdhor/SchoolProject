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
                                    <label for="deskripsi">deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi"
                                        placeholder="Penggalan Prestasi" value="{{ old('deskripsi') }}">
                                    @error('deskripsi')
                                        <label for-"deskripsi" class="text-danger">{{ $message }}</label>
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
                                    <label for="tanggal">Tanggal</label>
                                    <input id="tanggal" class="form-control" type="date" name="tanggal"
                                        value="{{ old('tanggal') }}" required autocomplete="username"
                                        placeholder="tanggal" />
                                    <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername2">Tujuan</label>
                                    <select name="jenis" class="form-control">
                                        <option value="" selected disabled>Select Tujuan</option>
                                        <option value="murid">Murid</option>
                                        <option value="guru">Guru</option>
                                        <option value="sekolah">Sekolah</option>
                                    </select>
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
                                <a href="{{ url('adminPrestasi') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
