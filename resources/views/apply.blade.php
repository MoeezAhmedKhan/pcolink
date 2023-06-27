@extends('master')
@section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">Apply</h1>
                    <nav class="d-flex align-items-center" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="1000">
                        <a href="index.html">Home<span class="fa fa-arrow-right"></span></a>
                        <a href="apply.html">Apply</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_area section_gap_bottom">
        <div class="container">
            <div class="row" style="margin-top: 80px" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="1000">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9919.85333490228!2d0.10141586935749!3d51.56890569072342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a5d4ea81cdef%3A0x6954529cabf6c2!2sIBZ%20Motorz%20Chadwell%20Heath!5e0!3m2!1sen!2s!4v1686311267823!5m2!1sen!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row mt-5">
                @if ($message = Session::get('success'))
                    <div class="col-md-12">
                            <strong style="float: right;color: black">{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-lg-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h6>{{ $applyData->home_town }}</h6>
                            <p>{{ $applyData->complete_address }}</p>
                        </div>
                        <div class="info_item">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6><a>{{ $applyData->phone }}</a></h6>
                            <p>{{ $applyData->timing }}</p>
                        </div>
                        <div class="info_item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6><a href="mailto:{{ $applyData->email }}">{{ $applyData->email }}</a></h6>
                            <p>{{ $applyData->email_text }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <form action="{{ url('/') }}/submitcontactform" method="POST" class="row contact_form">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter your name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="Enter city"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter city'"
                                    value="{{ old('city') }}">
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="postal" placeholder="Enter postal code"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter postal code'"
                                    value="{{ old('postal') }}">
                                @if ($errors->has('postal'))
                                    <span class="text-danger">{{ $errors->first('postal') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Enter phone number"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'"
                                    value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="address"
                                    placeholder="Enter street address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter street address'" value="{{ old('address') }}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="1" placeholder="Enter Message"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
