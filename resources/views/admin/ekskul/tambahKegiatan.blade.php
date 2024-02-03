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
                                    <label for="judulEkskul">Judul Kegiatan Ekskul</label>
                                    <input type="text" class="form-control" name="judulEkskul" placeholder="Judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <label for="judulEkskul" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sinopsis">Ringkasan</label>
                                    <textarea class="form-control" name="sinopsis" rows="4"
                                        placeholder="Penggalan Ekskul">{{ old('sinopsis') }}</textarea>
                                    @error('sinopsis')
                                        <label for="sinopsis" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="isiEkskul">Isi Kegiatan</label>
                                    <textarea class="form-control" name="isiEkskul" rows="8"
                                        placeholder="Isi Ekskul">{{ old('Ekskul') }}</textarea>
                                    @error('Ekskul')
                                        <label for="isiEkskul" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input id="tanggal" class="form-control" type="date" name="tanggal" value="{{old('tanggal')}}" required
                                        autocomplete="username" placeholder="tanggal"/>
                                    <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto">Thumbnail</label>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                                        value="{{ old('foto') }}" accept="image/png, image/jpeg">
                                    @error('foto')
                                        <label for="foto" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

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
