@extends('master')
@section('content')
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
                                <h2>{{$pcocarfirst->title ?? 'No text'}}</h2>
                                <p>{{$pcocarfirst->description ?? 'No description'}}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="banner-img pco-banner">
                        <img class="img-fluid pco-bg" src="uploads/{{$pcocarfirst->image ?? 'No image'}}"
                            alt="Banner-Car" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center mt-5">
        <div class="container">
            <div class="row">
                @foreach ($pcocarsecond as $item)
                <div class="col-md-4 mb-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="card my_card" style="padding: 30px;">
                        <img class="img-fluid" src="uploads/{{$item->image ?? 'No image'}}" alt="">
                        <div class="c-body">
                            <h4 class="text-center font-weight-bold mb-3">{{$item->car_name ?? 'No carname'}}</h4>
                            <p class="text-center float-right"><span class="font-weight-bold"
                                    style="font-size: 16px;">{{$item->price ?? 'No price'}}</span> {{$item->days_limit ?? 'No days'}}</p>
                            <p>{{$item->condition ?? 'No condition'}}</p>
                            <p>{{$item->car_type ?? 'No cartype'}}</p>
                            <div class="d-flex align-items-end">
                                <a href="{{ url('/cardetails/'.$item->id) }}" class="genric-btn primary w-100">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="feat bg-gray pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="section-head col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
              <h4><span>{{$pcocarthirdHead->title ?? 'No title'}}</span></h4>
              <p>{{$pcocarthirdHead->title_of_text ?? 'No text'}}</p>
            </div>
            @foreach ($pcocarthird as $item)
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
              <div class="item"> <span class="icon feature_box_col_one"><img src="uploads/{{$item->image}}" alt="No image"></span>
                <h6>{{$item->title ?? 'No title'}}</h6>
                <p>{{$item->description ?? 'No description'}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    

@endsection
