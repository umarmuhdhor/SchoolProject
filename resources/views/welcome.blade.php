@extends('layout.main')
@section('content')
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
                            <h2><a href="#">Album Foto</a></h2>
                            <p>Kenangan</p>
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
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-lightbulb-idea"></i>
                            </div>
                            <h2><a href="#">choose <span> what to</span> do</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                                ut laboremagna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="#">find <span> what you want</span></a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                                ut laboremagna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-location-on-road"></i>
                            </div>
                            <h2><a href="#">explore <span> amazing</span> place</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                                ut laboremagna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>Tentang Kami</h2>
                <p>Membentuk generasi penerus melalui pendidikan karakter dan vokasi keahlian dalam berbagai bidang</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--reviews start -->
    <section id="reviews" class="reviews">
        <div class="section-header">
            <h2>Staff Pengajar</h2>
            <p></p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c1.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h1>Tom Leakar</h1>
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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c2.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c3.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c4.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c1.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c2.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c3.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>

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
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets/images/clients/c4.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>

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
                                    <img src="fotoBerita/{{ $item->foto }}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">{{ $item->judulBerita }}</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p>
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

    <!--subscription strat -->
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
    <!--subscription end -->
@endsection
