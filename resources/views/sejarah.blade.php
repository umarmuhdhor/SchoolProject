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
                    SEJARAH
                </p>

                <div style="margin-top: 20px; display: flex; flex-wrap: wrap; justify-content: flex-start;">
                    <img src="{{ asset('fotoKegiatanEkskul/foto1.png') }}" alt="Kegiatan Photo"
                        style="width:400px; margin-right: 10px; margin-bottom: 10px; border-radius: 10%;">
                </div>

            </div><!--/.section-header-->
        </div><!--/.container-->
    </section><!--/.explore-->
@endsection
