@extends('master')
@section('content')
    <style>
        .container_new {
            position: relative;
        }

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
    <section style="margin-top: 200px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 animate__animated animate__pulse">
                    <div class="row p_abso">
                        <div class="col-md-4 pr-0">
                            <div class="circle" style="background-color: black;" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1000"></div>
                        </div>
                        <div class="col-md-8 px-0">
                            <div class="pco_main" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                                <h2>{{ $pcocarfirst->title ?? 'No text' }}</h2>
                                <p>{{ $pcocarfirst->description ?? 'No description' }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="banner-img pco-banner">
                        <img class="img-fluid pco-bg" src="uploads/{{ $pcocarfirst->image ?? 'No image' }}" alt="Banner-Car"
                            data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                @foreach ($pcocarsecond as $item)
                    <div class="col-md-4 mt-5">
                        <div class="container_new">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="uploads/{{ $item->image ?? 'No image' }}">
                                </div>
                                <div class="contentBx">
                                    <h2>{{ $item->car_name ?? 'No carname' }}</h2>
                                    <div class="size mt-3">
                                        <h3>{{ $item->condition ?? 'No condition' }}</h3>
                                        <h3 class="mb-2" style="font-weight: bold;">{{ $item->price ?? 'No price' }} {{ $item->days_limit ?? 'No days' }}</h3>
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
        </div>
    </section>

    <div class="feat bg-gray pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <h4><span>{{ $pcocarthirdHead->title ?? 'No title' }}</span></h4>
                    <p>{{ $pcocarthirdHead->title_of_text ?? 'No text' }}</p>
                </div>
                @foreach ($pcocarthird as $item)
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="item"> <span class="icon feature_box_col_one"><img src="uploads/{{ $item->image }}"
                                    alt="No image"></span>
                            <h6>{{ $item->title ?? 'No title' }}</h6>
                            <p>{{ $item->description ?? 'No description' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
