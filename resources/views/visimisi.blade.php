@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Visi Misi
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--works start -->
    <section id="works" class="works">
        <div class="container" style="margin-top:100px">
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
@endsection
