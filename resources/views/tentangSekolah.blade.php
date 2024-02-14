@extends('layout.main')
@section('content')
    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Tentang Sekolah
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <div class="container">
        <div
            style="display: flex; justify-content: space-between; background-color: #f7f7f7; padding: 20px; border-radius: 10px; margin-top: 20px;">
            <div>
                <img src="{{ asset('LogoSekolah/Logo.jpg') }}" alt="Logo"
                    style="width: 40px; height: 40px; border-radius: 50%; vertical-align: middle;">
            </div>
            <div style="text-align: center;">
                <h2 style="font-size: 28px; font-weight: bold;">SMAN 5 TALANG UBI</h2>
            </div>
            <div>
                <img src="{{ asset('LogoSekolah/Logo.jpg') }}" alt="Logo"
                    style="width: 40px; height: 40px; border-radius: 50%; vertical-align: middle;">
            </div>
        </div>


        <div style="background-color: #f7f7f7; padding: 20px; border-radius: 10px; margin-top: 20px; text-align: left;">
            @foreach ($sekolah as $item)
                <div style="display: flex; justify-content: space-between; background-color: #f7f7f7;">
                    <p style="margin: 10px 0; color: #333; font-size: 18px;">{{ $item->tentang }}</p>
                    <p
                        style="margin: 10px 0; color: #333; font-size: 18px; max-width: 300px;text-align: justify;text-justify: inter-word;hyphens: auto; @if (strlen($item->deskripsi) > 100) text-align: justify; @endif">
                        {{ $item->deskripsi }}
                    </p>
            @endforeach
        </div>
    </div>
@endsection
