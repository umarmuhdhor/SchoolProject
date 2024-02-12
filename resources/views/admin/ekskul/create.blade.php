@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambahkan Ekskul</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminEkskul.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Ekskul"
                                        value="{{ old('nama') }}">
                                    @error('nama')
                                        <label for-"nama" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi`</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Isi deskripsi"
                                        value="{{ old('deskripsi') }}">
                                    @error('deskripsi')
                                        <label for-"deskripsi" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputUsername2">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="" selected disabled>Select Status</option>
                                        <option value="aktif">aktif</option>
                                        <option value="tidak aktif">tidak aktif</option>
                                    </select>
                                    {{-- @error('mapel_id')
                                        <label for="name" class="text-danger">{{ $$message }}</label>
                                    @enderror --}}
                                </div>
                                <div style="margin-bottom: 15px;">
                                    <label for="guru" style="display: block; margin-bottom: 5px;">Pembimbing /
                                        Guru</label>
                                    <select name="idGuru" class="guruSelector" style="width: 100%;height: 200px;">
                                        @foreach ($guru as $item)
                                            <option value="{{ $item->idGuru }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="guru" style="display: block; margin-bottom: 5px;">Ketua / Murid</label>
                                    <select name="idMurid" class="guruSelector" style="width: 100%;height: 200px;">
                                        @foreach ($murid as $item)
                                            <option value="{{ $item->idMurid }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="guru" style="display: block; margin-bottom: 5px;">Periode</label>
                                    <select name="idPeriode" class="guruSelector" style="width: 100%;height: 200px;">
                                        @foreach ($periode as $item)
                                            <option value="{{ $item->idPeriode }}">{{ $item->tahunPeriode }} ||
                                                {{ $item->semester }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="foto">Logo Ekskul</label>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto"
                                        value="{{ old('foto') }}" accept="image/png, image/jpeg">
                                    @error('foto')
                                        <label for-"foto" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminEkskul') }}" class="btn btn-light"
                                    fdprocessedid="s74qgr">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>


    <script>
        $(".guruSelector").select2();
    </script>
@endsection
