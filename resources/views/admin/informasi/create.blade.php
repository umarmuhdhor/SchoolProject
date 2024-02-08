@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Informasi</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminInformasi.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Informasi"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <label for-"judul" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername2">Tujuan</label>
                                    <select name="tujuan" class="form-control">
                                        <option value="guru">Guru</option>
                                        <option value="murid">Murid</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiInformasi">Isi Informasi</label>
                                    <textarea class="form-control" name="isiInformasi" rows="8" placeholder="Isi Berita">{{ old('berita') }}</textarea>
                                    @error('informasi')
                                        <label for="isiInformasi" class="text-danger">{{ $message }}</label>
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
                                    <label for="foto1">Foto Tampilan</label>
                                    <input type="file" class="form-control" name="foto1" placeholder="Foto"
                                        value="{{ old('foto1') }}" accept="image/png, image/jpeg">
                                    @error('foto1')
                                        <label for="foto1" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="file">File</label>
                                    <input type="file" class="form-control" name="file" placeholder="File"
                                        value="{{ old('file') }}" accept=".docx, application/pdf">
                                    @error('file')
                                        <label for-"file" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="foto2">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto2" placeholder="Foto"
                                        value="{{ old('foto2') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto3">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto3" placeholder="Foto"
                                        value="{{ old('foto3') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto4">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto4" placeholder="Foto"
                                        value="{{ old('foto4') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto5">Foto Tambahan</label>
                                    <input type="file" class="form-control" name="foto5" placeholder="Foto"
                                        value="{{ old('foto5') }}" accept="image/png, image/jpeg">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminMapel') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
