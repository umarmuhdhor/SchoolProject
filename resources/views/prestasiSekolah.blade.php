@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Prestasi Sekolah
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="explore-content">
                <div class="row">
                    @foreach ($prestasi as $item)
                        <div class=" col-md-4 col-sm-6">
                            <div class="single-explore-item" style="border-radius: 20px;overflow: hidden;">
                                <div class="single-explore-img">
                                    <img src="{{ asset('fotoPrestasi/' . $item->foto) }}" alt="explore image"
                                        style="height: 250px; width: 100%">

                                </div>
                                <div class="single-explore-txt bg-theme-1">
                                    <h2 style="margin-left: 5px"><a
                                            href="{{ url('kegiatanEkskul', $item->id) }}">{{ $item->judul }}</a></h2>
                                    <div class="explore-person">
                                        <div class="row">
                                            <div class="col-sm-11" style="margin-left: 5px;margin-top:10px">
                                                <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                                    {{ substr($item->deskripsi, 0, 300) }}...
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div><!--/.container-->
    </section><!--/.explore-->
    <!--explore end -->
@endsection
