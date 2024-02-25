<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Directory Landing Page</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
                data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Seko<span>lah</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Kesiswaan<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a href="{{url('osis')}}">Osis</a></li> --}}
                                    <li><a href="{{ url('ekskul') }}">Ekskul</a></li>
                                    <li><a href="{{ url('daftarMurid') }}">Murid dan Alumni</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Kurikulum<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('informasiGuru') }}">Informasi Guru</a></li>
                                    <li><a href="{{ url('informasiMurid') }}">Informasi Murid</a></li>
                                    <li><a href="{{ url('informasiKurikulum') }}">Informasi Kurikulum</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Profile<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('tentangSekolah') }}">Tentang Sekolah</a></li>
                                    <li><a href="{{ url('sejarah') }}">Sejarah Singkat</a></li>
                                    <li><a href="{{ url('visimisi') }}">Visi dan Misi</a></li>
                                    <li><a href="{{ url('guruDanStaff') }}">Guru dan Staff</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Prestasi<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('prestasiMurid') }}">Murid</a></li>
                                    <li><a href="{{ url('prestasiGuru') }}">Guru</a></li>
                                    <li><a href="{{ url('prestasiSekolah') }}">Sekolah</a></li>
                                </ul>
                            </li>

                            @if (Route::has('login'))
                                <li class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ url('/admin') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @elseif (Auth::user()->role == 'guru')
                                            <a href="{{ url('/guru') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ url('/murid ') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                            in</a>
                                    @endauth
                                </li>
                            @endif
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->
    <!-- top-area End -->

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

    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content single-list-topics-content-active">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="{{ url('prestasi') }}">Prestasi</a></h2>
                            <p>prestasi siswa</p>
                        </div>
                    </li>

                    <li>
                        <div class="single-list-topics-content ">
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
                            <h2><a href="{{ url('p5') }}">P5</a></h2>
                            <p>Kurikulum Merdeka</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->


    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-menu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">Seko<span>lah</span></a>
                        </div><!--/.navbar-header-->
                    </div>
                    <div class="col-sm-9">
                        <ul class="footer-menu-item">
                            <li><a href="#works">Visi Misi</a></li>
                            <li><a href="#explore">Tentang Kami</a></li>
                            <li><a href="#reviews">Staf</a></li>
                            <li><a href="#blog">Berita</a></li>
                            <li><a href="#contact">contact</a></li>
                            <li class=" scroll"><a href="#contact">my account</a></li>
                        </ul><!--/.nav -->
                    </div>
                </div>
            </div>
            {{-- <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy;copyright. designed and developed by <a
                                href="https://www.themesine.com/">themesine</a>
                        </p><!--/p-->
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> +1 (222) 777 8888</i></span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div><!--/.hm-footer-copyright-->
        </div><!--/.container--> --}}

            <div id="scroll-Top">
                <div class="return-to-top">
                    <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Back to Top" aria-hidden="true"></i>
                </div>

            </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>

</html>
