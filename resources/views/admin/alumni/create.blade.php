@extends('admin/layout.main')
@section('content')
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
                                <input type="text" class="form-control" name="nama" placeholder="{{ $murid->nama }}"
                                    value="{{ $murid->nama }}" readonly>
                                @error('nama')
                                    <label for-"nama" class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputUsername2">Status</label>
                                <select name="status" class="form-control">
                                    <option value="tidakdiketahui">Tidak Diketahui</option>
                                    <option value="kerja">Kerja</option>
                                    <option value="kuliah">Kuliah</option>
                                </select>
                            </div>

                            <!-- Input untuk PTN -->
                            <div class="form-group mb-3" id="ptnContainer" style="display: none;">
                                <label for="ptn">PTN</label>
                                <input type="text" class="form-control" name="ptn" placeholder="Nama PTN">
                            </div>

                            <!-- Input untuk tempatKerja -->
                            <div class="form-group mb-3" id="tempatKerjaContainer" style="display: none;">
                                <label for="tempatKerja">Tempat Kerja</label>
                                <input type="text" class="form-control" name="tempatKerja" placeholder="Tempat Kerja">
                            </div>

                            <div class="form-group mb-3">
                                <label for="file">Document Kelulusan</label>
                                <input type="file" class="form-control" name="buktiKelulusan" placeholder="File"
                                    value="{{ old('file') }}" accept=".docx, application/pdf">
                                @error('file')
                                    <label for-"buktiKelulusan" class="text-danger">{{ $message }}</label>
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

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            // Event handler untuk mengubah status
            $('select[name="status"]').change(function () {
                var selectedStatus = $(this).val();

                // Tampilkan/menyembunyikan input berdasarkan status
                if (selectedStatus === 'kuliah') {
                    $('#ptnContainer').show();
                    $('#tempatKerjaContainer').hide();
                } else if (selectedStatus === 'kerja') {
                    $('#tempatKerjaContainer').show();
                    $('#ptnContainer').hide();
                } else {
                    $('#ptnContainer').hide();
                    $('#tempatKerjaContainer').hide();
                }
            });
        });
    </script>
@endsection
