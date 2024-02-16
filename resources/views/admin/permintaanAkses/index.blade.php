@extends('admin/layout.main')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Permintaan Akses</h5>

                <div class="row">
                    <!-- Kolom Pencarian -->
                    <div class="col-md-6 mb-3">
                        <label for="searchInput" class="form-label">Cari Murid:</label>
                        <input type="text" class="form-control" id="searchInput" placeholder="Nama Murid">
                    </div>
                </div>

                <!-- Daftar Murid -->
                <!-- Daftar Murid -->
                <div class="row" id="muridList">
                    @foreach ($permintaan as $item)
                        <div class="col-md-12 mb-3 murid-card" data-alasan="{{ strtolower($item->alasan) }}"
                            data-nama="{{ strtolower($item->murid->nama) }}">
                            <div class="card d-flex flex-row align-items-center" style="padding-right: 10px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->murid->nama }}</h5>
                                    <p class="card-text">{{ $item->alasan }}</p>
                                </div>
                                <div class="ml-auto">
                                    <form class="forms-sample" method="POST"
                                        action="{{ route('adminPermintaan.update', $item->idPermintaan) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input Tersembunyi untuk Menyimpan Nilai Alasan -->
                                        <input value="{{$item->idPermintaan}}" name="idPermintaan" hidden/>
                                        <!-- Button Terima -->
                                        <button type="submit" class="btn btn-primary mr-2" name="status"
                                            value="terima">Terima</button>

                                        <!-- Button Tolak -->
                                        <button type="submit" class="btn btn-primary mr-2" name="status"
                                            value="tolak">Tolak</button>
                                    </form>



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

            $(".murid-card").filter(function() {
                var tahunMurid = $(this).data("tahun").toString();
                $(this).toggle(selectedYear === "" || tahunMurid === selectedYear);
            });
        }
    </script>
@endsection
