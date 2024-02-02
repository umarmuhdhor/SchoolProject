@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Berikan Jabatan</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('adminJabatan.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-control jabatanSelector">
                                    <option value="pejabat">Pejabat</option>
                                    <option value="guru">Guru</option>
                                    <option value="staff">Staff</option>
                                </select>

                                @error('jabatan')
                                    <label for="jabatan" class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <div id="jabatanSpecificInput" style="margin-bottom: 15px; display: none;">
                                <label for="jabatanSpecific">Jabatan Specific</label>
                                <input type="text" class="form-control" name="jabatan"
                                    placeholder="Masukkan jabatan specific">
                            </div>

                            <div id="mapelInput" style="margin-bottom: 15px; display: none;">
                                <label for="mapel">Mapel</label>
                                <select class="form-control" name="jabatan">
                                    @foreach ($mapel as $item)
                                        <option value="Guru {{ $item->mataPelajaran }}">{{ $item->mataPelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div style="margin-bottom: 15px;">
                                <label for="guru" style="display: block; margin-bottom: 5px;">Guru</label>
                                <select class="guruSelector" name="idGuru"
                                    style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid gray;">
                                    @foreach ($guru as $item)
                                        <option value="{{ $item->idGuru }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputUsername2">Status</label>
                                <select name="status" class="form-control">
                                    <option value="aktif">aktif</option>
                                    <option value="tidak aktif">tidak aktif</option>
                                </select>
                                {{-- @error('mapel_id')
                                    <label for="name" class="text-danger">{{ $$message }}</label>
                                @enderror --}}
                            </div>

                            <div class="form-group mb-3">
                                <label for="tahunMenjabat">Tahun Menjabat</label>
                                <input type="text" class="form-control" name="tahunMenjabat"
                                    placeholder="Masukkan tahun menjabat" value="{{ old('tahunMenjabat') }}">

                                @error('tahun')
                                    <label for="tahun" class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                            <a href="{{ url('adminBerita') }}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                        </form>
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
        $(".jabatanSelector").change(function() {
            var selectedJabatan = $(this).val();

            // Hide semua input khusus jabatan dan reset nilainya
            $("#jabatanSpecificInput").hide().find("input").val('');
            $("#mapelInput").hide().find("select").val('').trigger('change');

            // Tampilkan input sesuai dengan jabatan yang dipilih
            if (selectedJabatan === 'pejabat') {
                $("#jabatanSpecificInput").show();
            } else if (selectedJabatan === 'guru') {
                $("#mapelInput").show();
            }
        });

        $(".guruSelector").select2();
    </script>
@endsection
