@extends('layout.main')
@section('content')
    <style>
        @import "https://fonts.googleapis.com/css?family=Josefin+Sans:400,700";

        a {
            color: #ffffff;
            text-decoration: none;
        }

        .explore {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            height: 200px;
            width: 200px;
            margin: 20px;
            perspective: 600px;
            transition: .5s;
        }

        .card:hover .card-front {
            transform: rotateX(-180deg);
        }

        .card:hover .card-back {
            transform: rotateX(0deg);
        }

        .card-front,
        .card-back {
            height: 100%;
            width: 100%;
            background-color: #000000;
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            border: #000000 10px solid;
        }

        .card-front {

            background-position: 50% 50%;
            background-size: cover;
            transform: rotateX(0deg);
            transition: .5s;
        }

        .card-back {
            transform: rotateX(180deg);
            transition: .5s;
            color: #ffffff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5px;
        }

        .card-back h2 {
            margin: 60% auto 35% auto;
            font-size: 26px;
        }

        .card-back span {
            font-size: 20px;
        }



        .card-back p {
            /* text-align: justify; */
            /* text-justify: inter-word; */
            hyphens: auto;
            font-size: 12px;
            color: white;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            padding: 4px;
        }



        .card-back p:hover {
            color: #000000;
            background-color: #fff;
            transition: .9s;
            border-radius: 20px
        }
    </style>

    <!--welcome-hero start -->
    <section id="home" class="welcome-hero2">
        <div class="container">
            <div class="welcome-hero-txt2">
                <h2>
                    Guru dan Staff
                </h2>
            </div>
        </div>
    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->
    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h3>
                    Kepala Sekolah dan Wakilnya
                </h3>
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    <div class="card">
                        <div class="card-front"
                            style="background-image: url(https://99px.ru/sstorage/56/2013/12/image_563012130153328414049.jpg);">
                        </div>
                        <div class="card-back">
                            <h2>Jane Doe<br><span>Senior Designer</span></h2>
                            <div class="social-icons">
                                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-front"></div>
                        <div class="card-back">
                            <h2>Jane Doe<br><span>Senior Designer</span></h2>
                            <div class="social-icons">
                                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.section-header-->
            <div class="section-header">
                <h3>
                    Kepala Bagian Sekolah
                </h3>
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    @foreach ($jabatan as $item)
                        @if ($item->jabatan && strpos(strtolower($item->jabatan), 'guru') !== 0)
                            <div class="card">
                                <div class="card-front"></div>
                                <div class="card-back">
                                    <h2>Jane Doe<br><span>Senior Designer</span></h2>
                                    <div class="social-icons">
                                        <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                        <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                        <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                        <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                        <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div><!--/.section-header-->
            <div class="section-header">
                <h3>
                    Staff Pengajar
                </h3>
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    @foreach ($jabatan as $item)
                        @if ($item->jabatan && strpos(strtolower($item->jabatan), 'guru') == 0)
                            <div class="card">
                                <div class="card-front"
                                    style="background-image: url('{{ asset('fotoGuru/' . $item->guru->foto) }}');"></div>

                                <div class="card-back">
                                    <p>{{ $item->guru->nama }}</p>
                                    <p>{{ $item->jabatan }}</p>
                                    <p>{{ $item->guru->deskripsi }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div><!--/.section-header-->

        </div><!--/.container-->
    </section><!--/.explore-->
@endsection
