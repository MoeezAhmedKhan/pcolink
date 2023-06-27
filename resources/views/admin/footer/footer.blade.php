@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Footer Section For Website</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Footer</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>
                </div>                
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>About</h6>
                            <form action="{{ url('/') }}/submitabout" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter About Title (Like About Us)</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Title" value="{{old('title')}}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter About</label>
                                        <input type="text" name="about" class="form-control"
                                            placeholder="Enter About" value="{{old('about')}}">
                                        @if ($errors->has('about'))
                                            <span class="text-danger">{{ $errors->first('about') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Contact</h6>
                            <form action="{{ url('/') }}/submitcontact" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="placeholderInput" class="form-label">Enter Contact Title (Like Contact Info)</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Contact" value="{{old('title')}}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Street Address</label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter Street Address" value="{{old('address')}}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Enter Phone" value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Email</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Enter Email" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Newsletter</h6>
                            <form action="{{ url('/') }}/submitnewsletter" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Newsletter Title (Like Newsletter)</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Newsletter Title" value="{{old('title')}}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Text (Like Stay update with our latest)</label>
                                        <input type="text" name="titletext" class="form-control"
                                            placeholder="Enter Newsletter Text" value="{{old('titletext')}}">
                                        @if ($errors->has('titletext'))
                                            <span class="text-danger">{{ $errors->first('titletext') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Email for Website User</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Email" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Follow Us</h6>
                            <form action="{{ url('/') }}/submitfollowus" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter Follow Title (Like Follow Us)</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Follow Title" value="{{old('title')}}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter Follow Title Text (Like Let us be social)</label>
                                        <input type="text" name="titletext" class="form-control"
                                            placeholder="Enter Text" value="{{old('titletext')}}">
                                        @if ($errors->has('titletext'))
                                            <span class="text-danger">{{ $errors->first('titletext') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter FaceBook Link</label>
                                        <input type="text" name="fblink" class="form-control"
                                            placeholder="Enter FaceBook Link" value="{{old('fblink')}}">
                                        @if ($errors->has('fblink'))
                                            <span class="text-danger">{{ $errors->first('fblink') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Instagram Link</label>
                                        <input type="text" name="instalink" class="form-control"
                                            placeholder="Enter Instagram Link" value="{{old('instalink')}}">
                                        @if ($errors->has('instalink'))
                                            <span class="text-danger">{{ $errors->first('instalink') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Whatsapp Number</label>
                                        <input type="text" name="whatsapp" class="form-control"
                                            placeholder="Enter Whatsapp Number" value="{{old('whatsapp')}}">
                                        @if ($errors->has('whatsapp'))
                                            <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Copyright</h6>
                            <form action="{{ url('/') }}/submitcopyright" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="placeholderInput" class="form-label">Enter Copyright Text (Like Copyright © 2023 All rights reserved etc)</label>
                                        <input type="text" name="copyright" class="form-control"
                                            placeholder="Enter Copyright Text" value="{{old('copyright')}}">
                                        @if ($errors->has('copyright'))
                                            <span class="text-danger">{{ $errors->first('copyright') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
