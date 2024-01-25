@extends('layout.main')
@section('content')
    <!-- Student Table start -->
    <section id="student-table" style="margin : 100px 0px">
        <div class="container">
            <h1 style="text-align: center; margin-bottom: 20px;">Data Ekstrakulikuler</h1>

            <!-- Search Input -->
            <input type="text" id="searchInput" placeholder="Cari nama ekskul atau alumni"
                style="padding: 10px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">

            <!-- Table ekskul -->
            <table id="ekskulTable" style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; display: block;">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 5%;">Nomor</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 40%;">Nama Ekskul</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">Pembina</th>
                        <th style="padding: 10px; border: 1px solid #ddd; width: 20%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomorekskul = 1;
                    @endphp

                    @foreach ($murid as $student)
                        <tr class="ekskul-row" data-tahun="{{ $student->tahunLulus }}">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $nomorekskul++ }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->nama }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $student->jk == 'lk' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->tanggalPendaftara }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
    <!-- Student Table end -->

    <!--reviews start -->
    <section id="reviews" class="reviews">
        <div class="section-header">
            <h2>Staff Pengajar</h2>
            <p></p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                @foreach ($guru as $item)
                    <div class="single-testimonial-box">
                        <div class="testimonial-description">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img class="testimonial-img" src="fotoGuru/{{ $item->foto }}" alt="clients">
                                </div><!--/.testimonial-img-->
                                <div class="testimonial-person">
                                    <h1>{{ $item->nama }}</h1>
                                    <h4>Guru Matematika</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-info-->
                            <div class="testimonial-comment">
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum. Sed ut perspiciatis eaque.
                                </p>
                            </div><!--/.testimonial-comment-->
                        </div><!--/.testimonial-description-->
                    </div><!--/.single-testimonial-box-->
                @endforeach

            </div>
        </div>

    </section><!--/.reviews-->
    <!--reviews end -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- JavaScript for Student Table -->
    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#ekskulTable tbody tr").filter(function() {
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
@endsection