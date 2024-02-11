@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div style="position: relative;">
            <h4 style="position: absolute; top: 0; right: 0; font-size: 14px; margin-top: 10px; margin-right: 10px;color:white">
                {{ $kegiatanEkskul->tanggal }}
            </h4>
        </div>
        <div class="container">
            <div class="welcome-hero-txt2">

                <h2>
                    {{ $kegiatanEkskul->judulKegiatan }}
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
                    {{ $kegiatanEkskul->isiKegiatan }}
                </p>

                <div style="margin-top: 20px; display: flex; flex-wrap: wrap; justify-content: flex-start;">
                    @php
                        $fotoArray = [$kegiatanEkskul->foto1, $kegiatanEkskul->foto2, $kegiatanEkskul->foto3, $kegiatanEkskul->foto4, $kegiatanEkskul->foto5];
                    @endphp

                    @foreach ($fotoArray as $fotoSet)
                        @if ($fotoSet != null)
                            <img src="{{ asset('fotoKegiatanEkskul/' . $fotoSet) }}" alt="Kegiatan Photo"
                                style="width:400px; margin-right: 10px; margin-bottom: 10px; border-radius: 10%;">
                        @endif
                    @endforeach
                </div>

            </div><!--/.section-header-->
        </div><!--/.container-->
    </section><!--/.explore-->
@endsection
