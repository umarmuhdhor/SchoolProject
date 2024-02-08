@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                {{-- tagline/slogan --}}
                <h2>Sekolah adalah tempat belajar<br> juga menuntut ilmu </h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit inventore nulla nisi sit soluta ea
                    distinctio! Numquam qui amet repudiandae facere autem reprehenderit natus excepturi, harum,
                    doloremque officiis perspiciatis tempora?
                </p>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="{{ url('prestasi') }}">Prestasi</a></h2>
                            <p>prestasi siswa</p>
                        </div>
                    </li>

                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="{{ url('ppdb') }}">PPDB</a></h2>
                            <p>penerimaan siswa</p>
                        </div>
                    </li>

                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">P5</a></h2>
                            <p>Kurikulum Merdeka</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>Visi Misi</h2>
                <p>Unggul dalam prestasi, berkarakter dan cinta lingkungan</p>
            </div><!--/.section-header-->
            <div class="works-content">
                <div class="row">
                    @foreach ($visi as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-how-works">
                                {{-- <div class="single-how-works-icon">
                                <i class="flaticon-networking"></i>
                            </div> --}}
                                <h2><a href="#"><span style="text-transform: capitalize;">
                                            {{ $item->judul }}</span></a></h2>
                                <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                    {{ $item->misi }}
                                </p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>Sejarah Singkat</h2>
                <div class="rowSejarah">
                    <p>
                        "SMA Nusantara":

                        SMA Nusantara didirikan pada tahun 1975 di kota fiktif "Harmonyville," yang terletak di
                        tengah-tengah
                        pulau utama Nusantara. Ide pendirian sekolah ini muncul dari kebutuhan masyarakat setempat untuk
                        menyediakan pendidikan berkualitas tinggi kepada generasi muda di wilayah tersebut.

                        Selama perjalanan sejarahnya, SMA Nusantara telah mengalami berbagai perubahan dan perkembangan.
                        Pada
                        tahun 1990-an, sekolah ini mengadopsi teknologi pendidikan modern dan memperluas fasilitasnya untuk
                        memenuhi tuntutan kurikulum yang terus berkembang.

                        Pada tahun 2000-an, SMA Nusantara mulai menonjol dalam berbagai kegiatan ekstrakurikuler, seperti
                        olahraga, seni, dan sains. Prestasi akademis dan non-akademis yang luar biasa membuat nama sekolah
                        ini
                        semakin dikenal di tingkat nasional.

                        SMA Nusantara terus menjadi lembaga pendidikan yang inovatif dan adaptif, terus mengikuti
                        perkembangan
                        teknologi dan metode pembelajaran terbaru. Dengan staf pengajar yang berkualitas tinggi dan
                        fasilitas
                        yang memadai, sekolah ini tetap menjadi pilihan utama bagi para orangtua yang menginginkan
                        pendidikan
                        terbaik untuk anak-anak mereka.

                        Hingga saat ini, SMA Nusantara tetap menjadi pusat pendidikan yang berperan penting dalam membentuk
                        generasi muda yang cerdas, kreatif, dan bertanggung jawab di wilayah "Harmonyville" dan sekitarnya.
                    </p>
                </div>
            </div><!--/.section-header-->
        </div><!--/.container-->
    </section><!--/.explore-->


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
                                    <img src="fotoBerita/{{ $item->thumbnail }}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">{{ $item->judulBerita }}</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a>{{$item->created_at}}</h4>
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

    {{-- <!--subscription strat -->
    <section id="contact" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Galeri Foto
                </h2>
                <p>
                    Listrace offer you to list your business with us and we very much able to promote your Business.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscription-input-group">
                        <form action="#">
                            <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                            <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                                creat account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/subscription-->
    <!--subscription end --> --}}
@endsection
