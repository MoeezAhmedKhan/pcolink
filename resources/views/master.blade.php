<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('theme/img/fav.png') }}">
    <meta name="author" content="CodePixar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>PCO Link - London</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('theme/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Include jQuery library for image slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Magnific Popup CSS for image slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Include Magnific Popup JavaScript for image slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        .f-active {
            border-bottom: 1px solid black;
        }

        #cartr {
            width: 100%;
            justify-content: space-between;
            display: flex;
            margin: 31px;
            margin-block: auto;
        }

        .custom-table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .custom-table th,
        .custom-table td {
            border: none;
        }

        /*why choose us*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        span,
        a,
        a:hover {
            display: inline-block;
            text-decoration: none;
            color: inherit;
        }

        .section-head {
            margin-bottom: 60px;
        }

        .section-head h4 {
            position: relative;
            padding: 0;
            color: #000;
            line-height: 1;
            letter-spacing: 0.3px;
            font-size: 34px;
            font-weight: 700;
            text-align: center;
            text-transform: none;
            margin-bottom: 30px;
        }

        .section-head h4:before {
            content: '';
            width: 60px;
            height: 3px;
            background: #000;
            position: absolute;
            left: 0px;
            bottom: -10px;
            right: 0;
            margin: 0 auto;
        }

        .section-head h4 span {
            font-weight: 700;
            padding-bottom: 5px;
            color: #2f2f2f
        }

        p.service_text {
            color: #cccccc !important;
            font-size: 16px;
            line-height: 28px;
            text-align: center;
        }

        .section-head p,
        p.awesome_line {
            color: #818181;
            font-size: 16px;
            line-height: 28px;
            text-align: center;
        }

        .extra-text {
            font-size: 34px;
            font-weight: 700;
            color: #2f2f2f;
            margin-bottom: 25px;
            position: relative;
            text-transform: none;
        }

        .extra-text::before {
            content: '';
            width: 60px;
            height: 3px;
            background: #000;
            position: absolute;
            left: 0px;
            bottom: -10px;
            right: 0;
            margin: 0 auto;
        }

        .extra-text span {
            font-weight: 700;
            color: #000;
        }

        .item {
            background: #fff;
            text-align: center;
            padding: 30px 25px;
            -webkit-box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
            box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
            border-radius: 20px;
            border: 5px solid rgba(0, 0, 0, 0.07);
            margin-bottom: 30px;
            -webkit-transition: all .5s ease 0;
            transition: all .5s ease 0;
            transition: all 0.5s ease 0s;
        }

        .item:hover {
            background: #000;
            box-shadow: 0 8px 20px 0px rgba(0, 0, 0, 0.2);
            -webkit-transition: all .5s ease 0;
            transition: all .5s ease 0;
            transition: all 0.5s ease 0s;
        }

        .item:hover .item,
        .item:hover span.icon {
            background: #fff;
            border-radius: 10px;
            -webkit-transition: all .5s ease 0;
            transition: all .5s ease 0;
            transition: all 0.5s ease 0s;
        }

        .item:hover h6,
        .item:hover p {
            color: #fff;
            -webkit-transition: all .5s ease 0;
            transition: all .5s ease 0;
            transition: all 0.5s ease 0s;
        }

        .item .icon {
            font-size: 40px;
            margin-bottom: 25px;
            color: #000;
            width: 90px;
            height: 90px;
            line-height: 96px;
            border-radius: 50px;
        }

        .item .feature_box_col_one {
            background: rgb(236, 236, 236);
            color: #000
        }

        .item p {
            font-size: 15px;
            line-height: 26px;
        }

        .item h6 {
            margin-bottom: 20px;
            color: #2f2f2f;
        }

        .mission p {
            margin-bottom: 10px;
            font-size: 15px;
            line-height: 28px;
            font-weight: 500;
        }

        .mission i {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background: #000;
            border-radius: 50%;
            color: #fff;
            font-size: 25px;
        }

        .mission .small-text {
            margin-left: 10px;
            font-size: 13px;
            color: #666;
        }

        .skills {
            padding-top: 0px;
        }

        .skills .prog-item {
            margin-bottom: 25px;
        }

        .skills .prog-item:last-child {
            margin-bottom: 0;
        }

        .skills .prog-item p {
            font-weight: 500;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .skills .prog-item .skills-progress {
            width: 100%;
            height: 10px;
            background: #e0e0e0;
            border-radius: 20px;
            position: relative;
        }

        .skills .prog-item .skills-progress span {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: #000;
            width: 10%;
            border-radius: 10px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        .skills .prog-item .skills-progress span:after {
            content: attr(data-value);
            position: absolute;
            top: -5px;
            right: 0;
            font-size: 10px;
            font-weight: 600;
            color: #fff;
            background: rgba(0, 0, 0, 0.9);
            padding: 3px 7px;
            border-radius: 30px;
        }

        /**/
    </style>
</head>

<body>
    <header class="header_area sticky-header zindex">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">

                    <a class="navbar-brand logo_h" href="{{ url('/') }}"><img
                            src="{{ asset('theme/img/weblogo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/pcocars') }}">PCO Cars</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/help') }}">Help</a></li>
                            <li class="nav-item"><a href="{{ url('/apply') }}" class="genric-btn primary">Apply</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>{{ $fooabout->title ?? 'No title' }}</h6>
                        <p>{{ $fooabout->about ?? 'No about' }}</p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>{{ $foocontact->title ?? 'No title' }}</h6>
                        <div class="footer-social d-flex align-items-center">
                            <ul>
                                <li><a href="#"><i
                                            class="fa fa-map-marker"></i></a>{{ $foocontact->address ?? 'No address' }}
                                </li>
                                <li><a href="#"><i
                                            class="fa fa-phone"></i></a>{{ $foocontact->phone ?? 'No phone' }}</li>
                                <li><a href="#"><i
                                            class="fa fa-envelope-o"></i></a>{{ $foocontact->email ?? 'No email' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>{{ $foonewsletter->title ?? 'No title' }}</h6>
                        <p>{{ $foonewsletter->text ?? 'No text' }}</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                            value="" type="text">
                                    </div>

                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>{{ $foofollowus->title ?? 'No title' }}</h6>
                        <p>{{ $foofollowus->text ?? 'No text' }}</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="{{ $foofollowus->facebook }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $foofollowus->instagram }}"><i class="fa fa-instagram"></i></a>
                            <a href="https://wa.me/{{ $foofollowus->whatsapp }}"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">{{ $foocopyright->copyright ?? 'No copyright' }}</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('theme/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('theme/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('theme/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme/js/countdown.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('theme/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('theme/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <!-- slider -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7ca66a913f1d4030","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
    <!-- just for help in accordion -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        var accordionButtons = document.getElementsByClassName("my-accordion");
        for (var i = 0; i < accordionButtons.length; i++) {
            accordionButtons[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    <!--  end just for help in accordion -->
    <script>
        $(document).ready(function() {
            var pageUrl = window.location.href;
            $(".navbar-collapse ul li a").each(function() {
                if ($(this).attr("href") == pageUrl) {
                    $(this).addClass("f-active");
                }
            });
        });
    </script>
    @stack('footer-scripts')
    @stack('carslider-scripts')
</body>

</html>
