@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Kegiatan Ekskul</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminKegiatanEkskul.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judulKegiatan">Judul Kegiatan Ekskul</label>
                                    <input type="text" class="form-control" name="judulKegiatan" placeholder="Judul"
                                        value="{{ old('judulKegiatan') }}">
                                    @error('judulKegiatan')
                                        <label for="judulKegiatan" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="ringkasan">Ringkasan</label>
                                    <textarea class="form-control" name="ringkasan" rows="4" placeholder="Penggalan Ekskul">{{ old('ringkasan') }}</textarea>
                                    @error('ringkasan')
                                        <label for="ringkasan" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiKegiatan">Isi Kegiatan</label>
                                    <textarea class="form-control" name="isiKegiatan" rows="8" placeholder="Isi Kegiatan">{{ old('isiKegiatan') }}</textarea>
                                    @error('isiKegiatan')
                                        <label for="isiKegiatan" class="text-danger">{{ $message }}</label>
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
                                    <label for="foto1">Foto Wajib/ Thumbnail</label>
                                    <input type="file" class="form-control" name="foto1" placeholder="foto tambahan"
                                        value="{{ old('foto1') }}" accept="image/png, image/jpeg">
                                    @error('foto1')
                                        <label for="foto1" class="text-danger">{{ $message }}</label>
                                    @enderror
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

                                <input name="idEkskul" value={{ $idEkskul }} hidden>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminEkskul') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
