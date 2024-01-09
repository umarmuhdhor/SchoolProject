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
    <header id="header-top" class="header-top">
        <ul>
            <li>
                <div class="header-top-left">
                    <ul>
                        {{-- <li class="select-opt">
                            <select name="language" id="language">
                                <option value="default">EN</option>
                                <option value="Bangla">BN</option>
                                <option value="Arabic">AB</option>
                            </select>
                        </li> --}}
                        {{-- <li class="select-opt">
                            <select name="currency" id="currency">
                                <option value="usd">USD</option>
                                <option value="euro">Euro</option>
                                <option value="bdt">BDT</option>
                            </select>
                        </li> --}}
                        <li class="select-opt">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="head-responsive-right pull-right">
                <div class="header-top-right">
                    <ul>
                        <li class="header-top-contact">
                            +1 222 777 6565
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </header><!--/.header-top-->
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
                            <li><a href="{{ route('welcome') }}">home</a></li>
                            <li><a href="{{ route('welcome') }}">Visi Misi</a></li>
                            <li><a href="{{ route('welcome') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('welcome') }}">Staff</a></li>
                            <li><a href="{{ route('welcome') }}">Berita</a></li>
                            <li><a href="{{ route('welcome') }}">contact</a></li>
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
                        <div class="single-list-topics-content ">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="{{ url('prestasi') }}">Prestasi</a></h2>
                            <p>prestasi siswa</p>
                        </div>
                    </li>

                    <li>
                        <div class="single-list-topics-content single-list-topics-content-active">
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
                            <h2><a href="{{ url('albumFoto') }}">Album Foto</a></h2>
                            <p>Kenangan</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    {{-- <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>Prestasi</h2>
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
    <!--works end --> --}}


    <!--blog start -->
    <section id="blog" class="blog">
        <div class="section-header">
            <h2>news and articles</h2>
            <p>Always upto date with our latest News and Articles </p>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                {{-- @foreach ($prestasi as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="foto/{{ $item->foto }}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">{{ $item->judul }}</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>

    </section><!--/.blog-->
    <!--blog end -->

    {{-- <!-- statistics strat -->
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
    <!-- statistics end --> --}}

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
