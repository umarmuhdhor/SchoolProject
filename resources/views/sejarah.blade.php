@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Sejarah Singkat
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">


                <p style="text-align: justify; text-justify: inter-word; hyphens: auto; margin-top: 20px;">
                    Sejarah Sekolah XYZ

                    Sekolah XYZ didirikan pada tahun 1950 oleh sekelompok tokoh pendidikan yang peduli terhadap peningkatan
                    mutu pendidikan di daerah tersebut. Dengan tekad yang kuat untuk memberikan pendidikan berkualitas
                    kepada masyarakat sekitar, sekolah ini dimulai sebagai sebuah bangunan kecil dengan beberapa ruang
                    kelas.

                    Tahun 1960-1970: Perkembangan Pesat

                    Pada dasawarsa ini, Sekolah XYZ mengalami perkembangan pesat. Dibangunnya gedung baru, penambahan
                    fasilitas olahraga, dan peningkatan jumlah guru menunjukkan komitmen sekolah terhadap pendidikan yang
                    lebih baik. Banyak lulusan yang sukses berasal dari sekolah ini, membuktikan bahwa pendidikan yang
                    diberikan memberikan dasar yang kuat bagi kesuksesan masa depan.

                    Tahun 1980-1990: Inovasi Pendidikan

                    Sekolah XYZ menjadi pusat inovasi pendidikan pada tahun 1980-an. Pengenalan teknologi di kelas, program
                    ekstrakurikuler yang beragam, dan pendekatan pengajaran yang kreatif menjadi ciri khas sekolah ini.
                    Inovasi ini bertujuan untuk mempersiapkan siswa menghadapi dunia yang semakin berkembang dan berubah.

                    Tahun 2000-an: Menjadi Sekolah Berstandar Internasional

                    Pada awal abad ke-21, Sekolah XYZ mendapatkan pengakuan sebagai sekolah berstandar internasional.
                    Kolaborasi dengan lembaga pendidikan di luar negeri, program pertukaran siswa, dan sertifikasi
                    internasional menjadi langkah-langkah penting dalam mempersiapkan siswa untuk tantangan global.

                    Tahun 2010-sekarang: Menciptakan Pemimpin Masa Depan

                    Saat ini, Sekolah XYZ tetap berkomitmen untuk menciptakan pemimpin masa depan. Pendidikan yang berbasis
                    nilai, pembelajaran berpusat pada siswa, dan penerapan teknologi terbaru menjadi fokus utama. Sekolah
                    ini juga aktif terlibat dalam kegiatan sosial dan lingkungan, mendorong siswa untuk menjadi individu
                    yang peduli terhadap masyarakat.

                    Dengan sejarah yang kaya ini, Sekolah XYZ terus berupaya memberikan pendidikan yang bermutu tinggi dan
                    berkontribusi pada perkembangan masyarakatnya.
                </p>

                <div style="margin-top: 20px; display: flex; flex-wrap: wrap; justify-content: flex-start;">
                    <img src="{{ asset('fotoSejarah/foto1.jpg') }}" alt="Kegiatan Photo"
                        style="width:400px; margin-right: 10px; margin-bottom: 10px; border-radius: 10%;">
                </div>

            </div><!--/.section-header-->
        </div><!--/.container-->
    </section><!--/.explore-->
@endsection
