@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Murid
                    <a href="{{ route('adminMurid.create') }}">
                        <span class="btn btn-outline-primary mx-3">Tambah Data Murid</span>
                    </a>
                </h5>

                <!-- Kolom Pencarian -->
                <div class="mb-3">
                    <label for="searchInput" class="form-label">Cari Murid:</label>
                    <input type="text" class="form-control" id="searchInput" placeholder="Nama Murid">
                </div>

                <!-- Daftar Murid -->
                <div class="row" id="muridList">
                    @foreach ($murid as $item)
                        <div class="col-md-12 mb-3 murid-card" data-nama="{{ strtolower($item->nama) }}">
                            <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nama }}</h5>
                                    <p class="card-text">{{ $item->status }}</p>
                                </div>
                                <div class="ml-auto">
                                    <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    {{-- <a href="{{ route('adminKelasMurid.show', $item->idKelas) }}"
                                        class="btn btn-success">Tambahkan</a>
                                    <a href="{{ route('adminKelas.show', $item->idKelas) }}"
                                        class="btn btn-warning">Detail</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchInput").on("input", function() {
                var value = $(this).val().toLowerCase();
                $(".murid-card").filter(function() {
                    var namaMurid = $(this).data("nama");
                    $(this).toggle(namaMurid.indexOf(value) > -1);
                });
            });
        });
    </script>
@endsection
