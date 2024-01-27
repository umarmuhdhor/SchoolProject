@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Berikan Jabatan</h5>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('adminBerita.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                                        value="{{ old('jabatan') }}">
                                    {{-- disni ado 3 option
                                        1. Guru
                                        2. Pejabaaat
                                        3. Staff

                                        kalo guru gek bawah nyo ado mapel apo.
                                        nah kalo pejabat ni sebenenyo langsong kenla
                                        staff ni gek buat be table 1 lagi eee, jadi ck ado table guru?
                                        --}}
                                    @error('jabatan')
                                        <label for-"jabatan" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="guru" style="display: block; margin-bottom: 5px;">Guru</label>
                                    <select class="guruSelector"
                                        style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid gray;">
                                        @foreach ($guru as $item)
                                            <option value="{{$item->idGuru}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tahun">Tahun Menjabat</label>
                                    <input type="text" class="form-control" name="tahun" placeholder="Isi Berita"
                                        value="{{ old('berita') }}">
                                    @error('berita')
                                        <label for-"tahun" class="text-danger">{{ $message }}</label>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                                <a href="{{ url('adminBerita') }}" class="btn btn-light"
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
