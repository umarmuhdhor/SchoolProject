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

                <div class="row">
                    <!-- Kolom Pencarian -->
                    <div class="col-md-6 mb-3">
                        <label for="searchInput" class="form-label">Cari Murid:</label>
                        <input type="text" class="form-control" id="searchInput" placeholder="Nama Murid">
                    </div>

                    <!-- Filter untuk memilih tahun penerimaan -->
                    <div class="col-md-6 mb-3">
                        <label for="tahunFilter" class="form-label">Filter Tahun Penerimaan:</label>
                        <select id="tahunFilter" class="form-control" onchange="filterByYear()">
                            <option value="">Semua Tahun</option>
                            @php
                                $distinctYears = [];
                                foreach ($murid as $item) {
                                    $year = \Carbon\Carbon::parse($item->tanggalPenerimaan)->format('Y');
                                    if (!in_array($year, $distinctYears)) {
                                        $distinctYears[] = $year;
                                    }
                                }
                            @endphp
                            @foreach ($distinctYears as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Daftar Murid -->
                <div class="row" id="muridList">
                    @foreach ($murid as $item)
                        @php
                            $year = \Carbon\Carbon::parse($item->tanggalPenerimaan)->format('Y');
                        @endphp
                        <div class="col-md-12 mb-3 murid-card" data-nama="{{ strtolower($item->nama) }}"
                            data-tahun="{{ $year }}">
                            <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nama }}</h5>
                                    <p class="card-text">{{ $item->status }}</p>
                                </div>
                                <div class="ml-auto">
                                    <!-- Menempatkan tombol edit di sisi kanan (ml-auto) -->
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('adminAlumni.show', $item->idMurid) }}"
                                        class="btn btn-success">luluskan</a>
                                    {{-- <a href="{{ route('adminKelas.show', $item->idKelas) }}"
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

        function filterByYear() {
            var selectedYear = $("#tahunFilter").val();

            $(".murid-card").filter(function () {
                var tahunMurid = $(this).data("tahun").toString();
                $(this).toggle(selectedYear === "" || tahunMurid === selectedYear);
            });
        }
    </script>
@endsection
