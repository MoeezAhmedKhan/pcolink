@extends('master')
@section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Car Details Page</h1>
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
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <div class="s_Product_carousel">
                        @foreach ($carImage as $item)
                            <div class="single-prd-item">
                                <a href="{{ asset('uploads/' . $item->car_image) }}" class="image-popup">
                                    <img class="img-fluid" src="{{ asset('uploads/' . $item->car_image) }}" alt="No image">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="single-prd-item">
                        <a href="{{ asset('uploads/' . $carData->image) }}" class="image-popup">
                            <img class="img-fluid" src="{{ asset('uploads/' . $carData->image) }}" alt="No image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-lg-12 offset-lg-1" style="margin-top: -45px;">
                        <div class="s_product_text">
                            <h2 class="text-left">{{ $carData->car_name }}</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>{{ $carData->condition }}</h4>
                                </div>
                                <div class="col-md-4">
                                    <h4><span class="font-weight-bold">{{ $carData->price }}</span>
                                        {{ $carData->days_limit }}</h4>
                                </div>
                                <div class="col-md-4">
                                    <h4>{{ $carData->car_type }}</h4>
                                </div>
                            </div>
                            <h2 class="text-left mt-2">Key Deatis</h2>
                            <table class="table table-bordered table-dark custom-table"
                                style="color: black;  position: relative;">
                                <tbody>
                                    <tr>
                                        <th>Year</th>
                                        <td>{{ $carData->year }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mileage</th>
                                        <td>{{ $carData->mileage }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fuel type</th>
                                        <td>{{ $carData->fuel_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gear box</th>
                                        <td>{{ $carData->gear_box }}</td>
                                    </tr>
                                    <tr>
                                        <th>Doors</th>
                                        <td>{{ $carData->doors }}</td>
                                    </tr>
                                    <tr>
                                        <th>Seats</th>
                                        <td>{{ $carData->seats }}</td>
                                    </tr>
                                    <tr>
                                        <th>Engine size</th>
                                        <td>{{ $carData->engine_size }}</td>
                                    </tr>
                                    <tr>
                                        <th>Body type</th>
                                        <td>{{ $carData->body_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Colour</th>
                                        <td>{{ $carData->colour }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="product_description_area" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Feautures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="profile" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>{{ $aboutData->about ?? 'No about' }}</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @foreach ($featureData as $feature)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }} {{ '. ' }} {{ $feature->feature }}
                                        </td>
                                    </tr>
                                @endforeach



                                {{-- @foreach ($fet as $item)   
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <center>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>{{ $contactData->text }}</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>{{ $contactData->address }}</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>{{ $contactData->number }}</h5>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('carslider-scripts')
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
@endpush
