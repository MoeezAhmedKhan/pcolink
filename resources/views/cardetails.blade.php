@extends('master')
@section('content')
    <link rel="stylesheet" href="{{ asset('theme/css/gallery.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>
        #owl-demo .item {
            background: #42bdc2;
            padding: 30px 0px;
            margin: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }

        .owl-dots {
            text-align: center;
        }

        .owl-dot {
            display: inline-block;
            margin: 0 5px;
            width: 10px;
            height: 10px;
            background: #ccc;
            border-radius: 50%;
            cursor: pointer;
        }

        .owl-dot.active {
            background: #000;
        }
    </style>
    <style>
        .container_new .card {
            position: relative;
            /* width: 320px;     */
            height: 450px;
            background: #232323;
            border-radius: 20px;
            overflow: hidden;
        }

        .container_new .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #7e8278;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }

        .container_new .card:hover:before {
            clip-path: circle(300px at 80% -20%);
        }

        .container_new .card:after {
            content: 'PCO LINK';
            position: absolute;
            top: 30%;
            right: 18%;
            font-size: 4em;
            font-family: "Roboto", sans-serif;
            font-weight: 800;
            font-style: italic;
            color: #c8c8c83b
        }

        .container_new .card .imgBx {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10000;
            width: 100%;
            height: 220px;
            transition: 0.5s;
        }

        .container_new .card:hover .imgBx {
            top: 0%;
            transform: translateY(0%);

        }

        .container_new .card .imgBx img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 270px;
        }

        .container_new .card .contentBx {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 10;
        }

        .container_new .card:hover .contentBx {
            height: 210px;
        }

        .container_new .card .contentBx h2 {
            position: relative;
            font-weight: 600;
            font-size: 20px !important;
            letter-spacing: 1px;
            color: #fff;
            margin: 0;
        }

        .container_new .card .contentBx .size,
        .container_new .card .contentBx .color {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 1px;
            transition: 0.5s;
            opacity: 0;
            visibility: hidden;
            padding-top: 0;
            padding-bottom: 0;
        }

        .container_new .card:hover .contentBx .size {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.5s;
        }

        .container_new .card:hover .contentBx .color {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.6s;
        }

        .container_new .card .contentBx .size h3,
        .container_new .card .contentBx .color h3 {
            color: #fff;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }

        @media (max-width: 576px) {

            .container_new .card .contentBx .size h3,
            .container_new .card .contentBx .color h3 {
                font-size: 10px !important;
            }

            .container_new .card .contentBx .size span {
                font-size: 13px !important;
            }
        }

        .container_new .card .contentBx .size span {
            /* width: 26px; */
            /* height: 26px; */
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            display: inline-block;
            color: #fff;
            /* background: #fff; */
            transition: 0.5s;
            /* color: #111; */
            border-radius: 4px;
            cursor: pointer;
        }

        /* .container_new .card .contentBx .size span:hover{
                                                                  background: #9bdc28;
                                                                } */

        .container_new .card .contentBx .color span {
            width: 20px;
            height: 20px;
            background: #ff0;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .container_new .card .contentBx .color span:nth-child(2) {
            background: #9bdc28;
        }

        .container_new .card .contentBx .color span:nth-child(3) {
            background: #03a9f4;
        }

        .container_new .card .contentBx .color span:nth-child(4) {
            background: #e91e63;
        }

        .container_new .card .contentBx a {
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 4px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #111;
            opacity: 0;
            transform: translateY(50px);
            transition: 0.5s;
            margin-top: 0;
        }

        .container_new .card:hover .contentBx a {
            opacity: 1;
            transform: translateY(0px);
            transition-delay: 0.75s;

        }
    </style>
    <style>
        /*sepeare*/
        @media screen and (max-width: 665px) {
            .nonstopcarslider {
                display: none
            }
        }

        .responsive-text {
            font-size: 18px;
            line-height: 1.4;
        }

        .benifits,
        .benifits-icon {
            margin: 0
        }

        @media (max-width: 768px) {
            .responsive-text {
                font-size: 15px;
                line-height: 1.2;
            }

            .responsive-title {
                font-size: 15px;
            }

            .pcoinsurance {
                width: 80%;
                height: 45px;
            }

            .vehcile-r-side {
                padding: 5px;
                font-size: 15px;
            }

            .insurance-heading {
                margin-top: 30px
            }

            .benifits,
            .benifits-icon {
                font-size: 15px;
                margin: 0
            }
        }

        /*end*/
    </style>


    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Car Details</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="fa fa-arrow-right"></span></a>
                        <a href="#">Pco Cars<span class="fa fa-arrow-right"></span></a>
                        <a href="single-product.html">car-details</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="product_image_area">
        <div class="container">
            <div class="row" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-md-8">
                    <a class="primary-btn responsive-title"
                        style="color: white">{{ $carData->car_name . ' | ' . $carData->year }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-out" data-aos-easing="linear" data-aos-duration="1000">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper22 mt-2">
                        <div class="swiper-wrapper">
                            @foreach ($carImage as $item)
                                <div class="swiper-slide">
                                    <a href="{{ asset('uploads/' . $item->car_image) }}" class="image-popup">
                                        <img src="{{ asset('uploads/' . $item->car_image) }}" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper11">
                        <div class="swiper-wrapper">
                            @foreach ($carImage as $item)
                                <div class="swiper-slide">
                                    <img src="{{ asset('uploads/' . $item->car_image) }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 mt-5 pt-3 mt-md-0" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <div class="col-lg-12 offset-lg-1" style="">
                        <div id="carkeys">
                            @foreach ($featureData as $feature)
                                <h4 class="responsive-text">{{ $feature->feature }}</h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="exclusive-deal-area mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="vehcile-r-side">
                        <h1 class="insurance-heading">PCO Car Hire</h1>
                        <h3 class="mb-4">With Insurance</h3>
                        @foreach ($insuranceData as $insur)
                            <p class="pcoinsurance">{{ $insur->insurance }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="vehcile-r-side">
                        <h1 class="mb-4">Benefits</h1>
                        @foreach ($benefitData as $bene)
                        <div class="d-flex align-items-center mt-2">
                            <i class="fa fa-check-circle benifits-icon" aria-hidden="true"></i>
                            <p class="benifits pl-2">&nbsp;&nbsp;{{$bene->benefit}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-product-area section_gap_bottom mt-5 mb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h3 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">What You Need to Join
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="1000">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <center><img src="{{ asset('theme/img/icon1.png') }}" width="100" alt="image">
                        <div class="card mb-3" style="border: none;">
                            <div class="card-body text-center">
                                <br>
                                <p class="card-text icon-font">DVLA Photocard Licence</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <center><img src="{{ asset('theme/img/icon1.png') }}" width="100" alt="image">
                        <div class="card mb-3" style="border: none;">
                            <div class="card-body text-center">
                                <br>
                                <p class="card-text icon-font">PCO Licence and Badge</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <center><img src="{{ asset('theme/img/icon1.png') }}" width="100" alt="image">
                        <div class="card mb-3" style="border: none;">
                            <div class="card-body text-center">
                                <br>
                                <p class="card-text icon-font">National Insurance Number</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <center><img src="{{ asset('theme/img/icon1.png') }}" width="100" alt="image">
                        <div class="card mb-3" style="border: none;">
                            <div class="card-body text-center">
                                <br>
                                <p class="card-text icon-font">Utility Bill or Bank Statement</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($pcocarsecond as $item)
                    <div class="mt-5">
                        <div class="container_new">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="{{ asset('uploads/' . $item->image ?? 'No image') }}">
                                </div>
                                <div class="contentBx">
                                    <h2>{{ $item->car_name ?? 'No carname' }}</h2>
                                    <div class="size mt-3">
                                        <h3>{{ $item->condition ?? 'No condition' }}</h3>
                                        <h3 class="mb-2" style="font-weight: bold;">
                                            {{ $item->price ?? 'No price' }} {{ $item->days_limit ?? 'No days' }}</h3>
                                    </div>
                                    <div class="color mt-2">
                                        <h3 class="text-center">{{ $item->car_type ?? 'No cartype' }}</h3>
                                    </div>
                                    <a class="mt-3" href="{{ url('/cardetails/' . $item->id) }} ">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="owl-dots"></div> --}}
        </div>
    </div>

    <section class="exclusive-deal-area mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12" id="homelast">
                    <h3 class="mt-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">To
                        reserve
                        your vehicle</h3>
                    <div class="homelast-text mt-3" data-aos="zoom" data-aos-easing="linear" data-aos-duration="1000">
                        <span style="color: black">Call:</span>&nbsp;&nbsp;<span
                            style="margin-right: 20px">{{ $applyData->phone }}</span><span
                            class="middleline"></span><span
                            style="color: black;margin-left: 20px">Email:</span>&nbsp;&nbsp;<span><a
                                href="mailto:{{ $applyData->email }}">{{ $applyData->email }}</a></span>
                    </div>
                    <a href="{{ url('apply') }}" class="primary-btn mt-3" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1000">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Add this in your main HTML file -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{ asset('theme/js/gallery.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


@push('carslider-scripts')
    <script>
        let slideIndex = 1;
        let timer;

        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");

            // Reset slide index if it exceeds the number of slides
            if (n > slides.length) {
                slideIndex = 1;
            } else if (n < 1) {
                slideIndex = slides.length;
            }

            // Hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Remove active class from all dots
            for (i = 0; i < script dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            // Display current slide and activate corresponding dot
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";

            // Clear the previous timer
            clearTimeout(timer);

            // Change slide every 2 seconds (2000 milliseconds)
            timer = setTimeout(() => {
                showSlides(slideIndex += 1);
            }, 2000);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000, // Adjust the delay (in milliseconds) between slides
                disableOnInteraction: false, // Enable autoplay even when user interacts with the slider
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            slidesPerView: 3,
            autoplay: {
                delay: 5000, // Set the delay in milliseconds
            },
            speed: 1000,
            watchSlidesProgress: true,
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper11", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            autoplay: {
                delay: 5000, // Delay between slide transitions in milliseconds
                disableOnInteraction: false, // Enable autoplay even when user interacts with the slider
            },
        });

        var swiper2 = new Swiper(".mySwiper22", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#owl-demo').owlCarousel({
                items: 3,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                margin: 30,
                dots: false, // Disable dots navigation
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endpush
