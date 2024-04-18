@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">PPDB</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action=""
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="judulBerita">Judul </label>
                                    <input type="text" class="form-control" name="judulBerita" placeholder="Judul"
                                        value="">
                                    @error('judul')
                                        <label for="judulBerita" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sinopsis">Paragraf</label>
                                    <textarea class="form-control" name="sinopsis" rows="4" placeholder="Penggalan Berita"></textarea>
                                    @error('sinopsis')
                                        <label for="sinopsis" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">Foto</label>
                                    <input type="file" class="form-control" name="thumbnail" placeholder="Foto"
                                        accept="image/png, image/jpeg">
                                    @error('thumbnail')
                                        <label for="thumbnail" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="foto1">Foto</label>
                                    <input type="file" class="form-control" name="foto1" placeholder="foto tambahan"
                                        value="{{ old('foto1') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto2">Foto </label>
                                    <input type="file" class="form-control" name="foto2" placeholder="foto tambahan"
                                        value="{{ old('foto2') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto3">Foto </label>
                                    <input type="file" class="form-control" name="foto3" placeholder="foto tambahan"
                                        value="{{ old('foto3') }}" accept="image/png, image/jpeg">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto4">Foto </label>
                                    <input type="file" class="form-control" name="foto4" placeholder="foto tambahan"
                                        value="{{ old('foto4') }}" accept="image/png, image/jpeg">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
