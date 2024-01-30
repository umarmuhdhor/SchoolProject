@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Data Ektrakulikuler
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore</h2>
                <p>Explore New place, food, culture around the world and many more</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item" style="border-radius: 20px;overflow: hidden;">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e1.jpg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2 style="margin-left: 5px"><a href="#">Judul Berita Mungkin akan sepanjang ini
                                        kurang lebih</a></h2>
                                <p class="explore-rating-price"></p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-11" style="margin-left: 5px">
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et
                                                disini tempat sinopsis dari sebuah berita mungkin akan sepanjang ini ? ya
                                                sepanjang ini
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">Download
                                                Now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="upload"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->
@endsection
