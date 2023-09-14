@extends('master')
@section('content')
    <section class="banner-area mt-5">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-content">
                                <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                                    {{ $homefirst->title ?? 'No title' }} </h1>
                                <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                                    {{ $homefirst->description ?? 'No description' }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img class="img-fluid" src="uploads/{{ $homefirst->image ?? 'No image' }}" alt="image"
                                    data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-area section_gap">
        <div class="container">
            <div class="row text-center mb-3">
                <h3 style="margin: auto;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    {{ $homesecond->title ?? 'No title' }}
                </h3>
            </div>
            <div class="row features-inner" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="uploads/{{ $homesecond->image1 ?? 'No image 1' }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="uploads/{{ $homesecond->image2 ?? 'No image 2' }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="uploads/{{ $homesecond->image3 ?? 'No image 3' }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="uploads/{{ $homesecond->image4 ?? 'No image 4' }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row scrollable-div">
                        <div class="single-deal deal-section p-0" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1000">
                            <h2 class="section-title">{{ $homethird->title ?? 'No title' }}</h2>
                            <p class="section-description">{{ $homethird->description ?? 'No description' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-deal" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="uploads/{{ $homethird->image ?? 'No image' }}" alt="image">
                        <div class="deal-details">
                            <h6 class="deal-title">Cars for rent</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-area section_gap" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper">
                @foreach ($homefourth as $item)
                    <div class="swiper-slide single-img slide">
                        <img class="img-fluid d-block mx-auto" src="uploads/{{ $item->image }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h3 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            {{ $homefifth->title ?? 'No title' }}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <center><img src="uploads/{{ $homefifth->image1 ?? 'No image1' }}" class="help-img" alt="image">
                        <div class="card mb-3" style="width: 50%;border: none;">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $homefifth->description1 ?? 'No description1' }}</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <center><img src="uploads/{{ $homefifth->image2 ?? 'No image2' }}" class="help-img" alt="image">
                        <div class="card mb-3" style="width: 50%;border: none;">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $homefifth->description2 ?? 'No description2' }}</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <center><img src="uploads/{{ $homefifth->image3 ?? 'No image3' }}" class="help-img" alt="image">
                        <div class="card mb-3" style="width: 50%;border: none;">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $homefifth->description3 ?? 'No description3' }}</p>
                            </div>
                        </div>
                    </center>
                </div>

            </div>

        </div>
        </div>

        </div>
    </section>

    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left"
                    style="background: url(uploads/<?php echo !empty($homesixth->left_image) ? $homesixth->left_image : 'no-image.png'; ?>) center no-repeat; background-size: cover;  text-align: center; padding: 275px 0; position: realtive;"
                    data-aos="fade-out" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                                {{ $homesixth->left_text ?? 'No left text' }}</h1>
                        </div>
                    </div>
                    <a href="{{ url('pcocars') }}" class="primary-btn" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1000">{{ $homesixth->left_button_text ?? 'No left button text' }}</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <img class="img-fluid w-100" src="uploads/{{ $homesixth->right_image ?? 'No right image' }}"
                        alt="image" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </section>

    <section class="exclusive-deal-area mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 no-padding" data-aos="zoom" data-aos-easing="linear" data-aos-duration="1000">
                    <img src="{{ asset('theme/img/our-vehicle.jpg') }}" id="vehicle-img" alt="">
                    <div class="triangle"></div>
                </div>
                <div class="col-lg-6 col-md-12 vehcile-r-side px-2 px-md-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <h3>All our vehicles :</h3>
                    <span class="ve-con" style="display: inline-block">&#10140; &nbsp; &nbsp; &nbsp;</span><span
                        class="ve-con-text">Comply with all TFL and legal regulations</span><br>
                    <span class="ve-con" style="display: inline-block">&#10140; &nbsp; &nbsp; &nbsp;</span><span
                        class="ve-con-text">Are well-maintained</span><br>
                    <span class="ve-con" style="display: inline-block">&#10140; &nbsp; &nbsp; &nbsp;</span><span
                        class="ve-con-text">Are serviced at regular intervals</span><br>
                    <span class="ve-con" style="display: inline-block">&#10140; &nbsp; &nbsp; &nbsp;</span><span
                        class="ve-con-text">Have fully comprehensive insurance cover</span><br>
                    <span class="ve-con" style="display: inline-block">&#10140; &nbsp; &nbsp; &nbsp;</span><span
                        class="ve-con-text">Come with breakdown cover</span><br><br>
                    <img src="{{ asset('theme/img/traa.png') }}" width="30%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 target-r-side ve-con-text px-2 px-md-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <h3>Our 2030</h3>
                    <h3>zero-emission target</h3>
                    <br>
                    <p>All our vehicles will help us become a zero-emission company by 2030. This is:</p>
                    <li>Good for you</li>
                    <li>Good for your family and friends</li>
                    <li>Good for the environment</li>
                </div>
                <div class="col-lg-6 col-md-12 no-padding" data-aos="zoom" data-aos-easing="linear" data-aos-duration="1000">
                    <img src="{{ asset('theme/img/target.jpg') }}" id="target-img" alt="">
                    <div class="triangle-right"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row" data-aos="zoom" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-lg-12 col-md-12 px-2 px-md-4" id="homesecondlast">
                    <p>Investing in a KJ PCO vehicle will help you help London. Remember, Transport For London’s ultra-low
                        emission policy will be expanded from 21 October 2021. See <a
                            href="https://tfl.gov.uk/modes/driving/ultra-low-emission-zone"
                            style="text-decoration: underline">TFL’s website</a> for more details on this.</p>
                    <p>Contact us today. We will do everything we can to keep you on the road.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="exclusive-deal-area mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 px-2 px-md-4" id="homelast">
                    <h3 class="mt-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">To reserve your vehicle</h3>
                    <div class="homelast-text mt-3" data-aos="zoom" data-aos-easing="linear" data-aos-duration="1000">
                        <span style="color: black">Call:</span>&nbsp;&nbsp;<span style="margin-right: 20px">{{ $applyData->phone }}</span><span class="middleline"></span><span
                            style="color: black;margin-left: 20px">Email:</span>&nbsp;&nbsp;<span><a href="mailto:{{ $applyData->email }}">{{ $applyData->email }}</a></span>
                    </div>
                    <a href="{{ url('apply') }}" class="primary-btn mt-3" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1000">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer-scripts')
    <script>
      var swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                interval: 1500,
                disableOnInteraction: false
            },
            breakpoints: {
                // when window width is <= 768px
                768: {
                    slidesPerView: 1,
                },
                // when window width >= 768px (Larger screens)
                992: {
                    slidesPerView: 5,
                }
            }
        });
    </script>
@endpush
