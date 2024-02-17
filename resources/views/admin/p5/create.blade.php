@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">P5 Baru</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminP5.store') }}"
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
                                    <label for="isi">isi</label>
                                    <textarea class="form-control" name="isi" rows="8"
                                        placeholder="Isi">{{ old('isi') }}</textarea>
                                    @error('isi')
                                        <label for="isi" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input id="tanggal" class="form-control" type="date" name="tanggal" value="{{old('tanggal')}}" required
                                        autocomplete="username" placeholder="tanggal"/>
                                    <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
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
                                <a href="{{ url('adminisi') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
