@extends('layout.main')
@section('content')
    <!-- Student Table start -->
    <section id="student-table" style="margin : 100px 0px">
        <div class="container">
            <h1 style="text-align: center; margin-bottom: 20px;">Data Siswa dan Alumni</h1>

            <!-- Dropdown untuk memilih tipe data -->
            <div style="margin-bottom: 15px;">
                <label for="dataType" style="font-size: 16px; margin-right: 10px;">Pilih Tipe Data:</label>
                <select id="dataType" onchange="changeDataType()"
                    style="padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="siswa">Siswa</option>
                    <option value="alumni">Alumni</option>
                </select>
            </div>

            <!-- Search Input -->
            <input type="text" id="searchInput" placeholder="Cari nama siswa atau alumni"
                style="padding: 10px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">

            <!-- Table Siswa -->
            <table id="siswaTable" style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; display: block;">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 5%;">Nomor</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 40%;">Nama</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">Jenis Kelamin</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">Tahun Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomorSiswa = 1;
                    @endphp

                    @foreach ($murid as $student)
                        <tr class="siswa-row" data-tahun="{{ $student->tahunLulus }}">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $nomorSiswa++ }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->nama }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $student->jk == 'lk' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->tanggalPendaftara }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Table Alumni -->
            <table id="alumniTable" style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; display: none;">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 5%;">Nomor</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 40%;">Nama</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">PTN</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">Jalur Seleksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomorAlumni = 1;
                    @endphp

                    @foreach ($murid as $alumnus)
                        <tr class="alumni-row" data-tahun="{{ $alumnus->tahunLulus }}">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $nomorAlumni++ }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $alumnus->nama }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $alumnus->ptn }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $alumnus->jalurSeleksi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Buttons -->
            <div id="paginationButtons">
                <button onclick="changePage(-1)">Sebelumnya</button>
                <button onclick="changePage(1)">Berikutnya</button>
            </div>
        </div>
    </section>
    <!-- Student Table end -->



    <!-- statistics strat -->
    <section id="statistics" class="statistics">
        <div class="container">
            <div class="statistics-counter">
                <div class="col-md-4 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">30</div> <span>+</span>
                        </div><!--/.statistics-content-->
                        <h3>Staff</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-4 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">300</div> <span>+</span>
                        </div><!--/.statistics-content-->
                        <h3>Peserta didik aktif</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-4 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">2000</div> <span>+</span>
                        </div><!--/.statistics-content-->
                        <h3>Alumni</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
            </div><!--/.statistics-counter-->
        </div><!--/.container-->

    </section><!--/.counter-->
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    @foreach ($berita as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img src="fotoBerita/{{ $item->foto }}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">{{ $item->judulBerita }}</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p class="blog-item-description">
                                        {{ $item->sinopsis }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- JavaScript for Student Table -->
    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#siswaTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
    <!-- JavaScript for Student Table -->
    <script>
        $(document).ready(function() {
            var rowsPerPage = 10; // Tentukan jumlah baris yang ditampilkan per halaman
            var currentPage = 1;

            // Hitung jumlah halaman
            var totalRows = $(".student-row").length;
            var totalPages = Math.ceil(totalRows / rowsPerPage);

            function showPage(page) {
                $(".student-row").hide();

                // Tampilkan baris pada halaman yang sesuai
                var start = (page - 1) * rowsPerPage;
                var end = start + rowsPerPage;

                $(".student-row").slice(start, end).show();
            }

            function updatePaginationButtons() {
                $("#paginationButtons button").prop("disabled", false);

                if (currentPage === 1) {
                    $("#paginationButtons button:first-child").prop("disabled", true);
                }

                if (currentPage === totalPages) {
                    $("#paginationButtons button:last-child").prop("disabled", true);
                }
            }

            function changePage(delta) {
                currentPage += delta;

                if (currentPage < 1) {
                    currentPage = 1;
                } else if (currentPage > totalPages) {
                    currentPage = totalPages;
                }

                showPage(currentPage);
                updatePaginationButtons();
            }

            // Tampilkan halaman pertama saat halaman dimuat
            showPage(currentPage);
            updatePaginationButtons();
        });
    </script>
    <script>
        function changeDataType() {
            var selectedType = document.getElementById("dataType").value;

            if (selectedType === "siswa") {
                document.getElementById("siswaTable").style.display = "block";
                document.getElementById("alumniTable").style.display = "none";
            } else if (selectedType === "alumni") {
                document.getElementById("siswaTable").style.display = "none";
                document.getElementById("alumniTable").style.display = "block";
            }
        }
    </script>
@endsection
