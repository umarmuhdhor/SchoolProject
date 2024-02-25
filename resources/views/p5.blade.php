@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div style="position: relative;">
            <h4
                style="position: absolute; top: 0; right: 0; font-size: 14px; margin-top: 10px; margin-right: 10px;color:white">
            </h4>
        </div>
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    P5
                </h2>

            </div>
        </div>
    </section><!--/.welcome-hero-->


    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>Text blabla</h2>
                <p></p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    @foreach ($p5 as $item)
                        <div class=" col-md-4 col-sm-6">
                            <div class="single-explore-item" style="border-radius: 20px;overflow: hidden;">
                                <div class="single-explore-img">
                                    <img src="fotoP5/{{ $item->foto1 }}" alt="explore image"
                                        style="height: 250px;width: 100%">
                                </div>
                                <div class="single-explore-txt bg-theme-1">
                                    <h2 style="margin-left: 5px"><a
                                            href="{{ url('detailInformasiGuru', $item->idInformasi) }}">{{ $item->judul }}</a>
                                    </h2>
                                    <div class="explore-person">
                                        <div class="row">
                                            <div class="col-sm-11" style="margin-left: 5px;margin-top:10px">
                                                <p style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                                                    {{ substr($item->isi, 0, 300) }}...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-open-close-part">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                @if ($item->file)
                                                    <a href="fileInformasi/{{ $item->file }}"
                                                        download="{{ $item->file }}.pdf">
                                                        <button class="close-btn">Download Now</button>
                                                    </a>
                                                @else
                                                    <a href="fileInformasi/{{ $item->file }}"
                                                        download="{{ $item->file }}.pdf">
                                                        <button class="close-btn">File Tidak Tersedia</button>
                                                    </a>
                                                @endif

                                            </div>
                                            <div class="col-sm-7">
                                                <div class="explore-map-icon">
                                                    <a href="fileInformasi/{{ $item->file }}"
                                                        download="{{ $item->file }}.pdf">
                                                        <i data-feather="download"></i>
                                                    </a>
                                                </div>
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
