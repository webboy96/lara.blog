
<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/front/img/favicon.png') }}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
</head>

<body class="blog">
<!--====== Preloader Area Start ======-->
{{--<div id="preloader">
    <!-- Digimax Preloader -->
    <div id="digimax-preloader" class="digimax-preloader">
        <!-- Preloader Animation -->
        <div class="preloader-animation">
            <!-- Spinner -->
            <div class="spinner"></div>
            <!-- Loader -->
            <div class="loader">
                <span data-text-preloader="D" class="animated-letters">D</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="G" class="animated-letters">G</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="M" class="animated-letters">M</span>
                <span data-text-preloader="A" class="animated-letters">A</span>
                <span data-text-preloader="X" class="animated-letters">X</span>
            </div>
            <p class="fw-5 text-center text-uppercase">Loading</p>
        </div>
        <!-- Loader Animation -->
        <div class="loader-animation">
            <div class="row h-100">
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!--====== Preloader Area End ======-->

<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main overflow-hidden">


    <!-- ***** Header Start ***** -->
    @include('layouts.header')
    <!-- ***** Header End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content text-center">
                        {{--<h2 class="text-white text-uppercase mb-3">Blog Grid</h2>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Pages</a></li>
                            <li class="breadcrumb-item text-white active">Blog - Left Sidebar</li>
                        </ol>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row">
                        @include('layouts.sidebar')

                        @yield('content')


            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!--====== Footer Area Start ======-->
    @include('layouts.footer')
    <!--====== Footer Area End ======-->

    <!--====== Modal Search Area Start ======-->
    <div id="search" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Search <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="row">
                                <div class="col-12 pb-3">
                                    <h2 class="search-title mb-3">What are you looking for?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group">
                                    <input type="text" class="form-control" placeholder="Enter your keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group align-self-center">
                                    <button class="btn btn-bordered mt-3">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Search Area End ======-->

    <!--====== Modal Responsive Menu Area Start ======-->
    <div id="menu" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Menu <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Responsive Menu Area End ======-->
</div>

<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>

</html>
