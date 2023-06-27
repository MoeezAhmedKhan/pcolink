@extends('master')
@section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">Help</h1>
                    <nav class="d-flex align-items-center" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="1000">
                        <a href="index.html">Home<span class="fa fa-arrow-right"></span></a>
                        <a href="category.html">Help</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <h2>{{$help1->title ?? 'No title'}}</h2>
                    <p>{{$help1->text ?? 'No text'}}</p>
                </div>
                <div class="col-md-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="faq" id="accordion">
                        <div class="card">
                            @foreach ($help2 as $index => $item)

                            <div class="card-header" id="faqHeading-{{$index}}">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$index}}"
                                        data-aria-expanded="true" data-aria-controls="faqCollapse-{{$index}}">
                                        <span class="badge">{{$index+1}}</span>{{$item['question'] ?? 'No question'}}
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-{{$index}}" class="collapse" aria-labelledby="faqHeading-{{$index}}"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{$item['answer'] ?? 'No answer'}}</p>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
