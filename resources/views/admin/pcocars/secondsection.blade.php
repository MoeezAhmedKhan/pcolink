@extends('admin.layout')
@section('section')
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Second Section For Pco Cars</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add PCO Car</li>
                                <li class="breadcrumb-item active">Second Section</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <marquee behavior="scroll" direction="left" style="color: #4ab0c1;font-size: 16px">
                    <strong>Welcome, Admin!</strong> You can insert multiple car details in this section. Fill in the
                    required fields such as car make, model, year, color, and any additional information. Feel free to add
                    as many cars as you need to showcase on your website. Happy car detailing!
                </marquee>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Add Car Details</h5>
                            <form action="{{ url('/') }}/pcocarssecondsection" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car name</label>
                                        <input type="text" name="car_name" class="form-control"
                                            placeholder="Enter car name" value="{{ old('car_name') }}">
                                        {{-- @if ($errors->has('car_name'))
                                            <span class="text-danger">{{ $errors->first('car_name') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Main Car Image</label>
                                        <input class="form-control" name="image" type="file">
                                        {{-- @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Condition (Like Used 19/20
                                            Plote)</label>
                                        <input type="text" name="condition" class="form-control"
                                            placeholder="Enter car Condition" value="{{ old('condition') }}">
                                        {{-- @if ($errors->has('condition'))
                                            <span class="text-danger">{{ $errors->first('condition') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car price</label>
                                        <input type="text" name="price" class="form-control"
                                            placeholder="Enter car price" value="{{ old('price') }}">
                                        {{-- @if ($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Days Limit (Like Per week)</label>
                                        <input type="text" name="days_limit" class="form-control"
                                            placeholder="Enter Days Limit" value="{{ old('days_limit') }}">
                                        {{-- @if ($errors->has('days_limit'))
                                            <span class="text-danger">{{ $errors->first('days_limit') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Type (Like Fully Hybrid
                                            Car)</label>
                                        <input type="text" name="car_type" class="form-control"
                                            placeholder="Enter car type" value="{{ old('car_type') }}">
                                        {{-- @if ($errors->has('car_type'))
                                            <span class="text-danger">{{ $errors->first('car_type') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car year</label>
                                        <input type="text" name="year" class="form-control"
                                            placeholder="Enter car year" value="{{ old('year') }}">
                                        {{-- @if ($errors->has('year'))
                                            <span class="text-danger">{{ $errors->first('year') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car mileage (Like 69,871
                                            Miles)</label>
                                        <input type="text" name="mileage" class="form-control"
                                            placeholder="Enter car mileage" value="{{ old('mileage') }}">
                                        {{-- @if ($errors->has('mileage'))
                                            <span class="text-danger">{{ $errors->first('mileage') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Fuel type (Like Petrol)</label>
                                        <input type="text" name="fuel_type" class="form-control"
                                            placeholder="Enter fuel type" value="{{ old('fuel_type') }}">
                                        {{-- @if ($errors->has('fuel_type'))
                                            <span class="text-danger">{{ $errors->first('fuel_type') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Gear Box (Like Automatic)</label>
                                        <input type="text" name="gear_box" class="form-control"
                                            placeholder="Enter Gear Box" value="{{ old('gear_box') }}">
                                        {{-- @if ($errors->has('gear_box'))
                                            <span class="text-danger">{{ $errors->first('gear_box') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car doors (Like 4)</label>
                                        <input type="text" name="doors" class="form-control"
                                            placeholder="Enter car doors" value="{{ old('doors') }}">
                                        {{-- @if ($errors->has('doors'))
                                            <span class="text-danger">{{ $errors->first('doors') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car seats (Like 5)</label>
                                        <input type="text" name="seats" class="form-control"
                                            placeholder="Enter car seats" value="{{ old('seats') }}">
                                        {{-- @if ($errors->has('seats'))
                                            <span class="text-danger">{{ $errors->first('seats') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Engine Size (Like
                                            1.6L)</label>
                                        <input type="text" name="engine_size" class="form-control"
                                            placeholder="Enter engine size" value="{{ old('engine_size') }}">
                                        {{-- @if ($errors->has('engine_size'))
                                            <span class="text-danger">{{ $errors->first('engine_size') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Body Type (Like
                                            Hatchback)</label>
                                        <input type="text" name="body_type" class="form-control"
                                            placeholder="Enter body type" value="{{ old('body_type') }}">
                                        {{-- @if ($errors->has('body_type'))
                                            <span class="text-danger">{{ $errors->first('body_type') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car colour</label>
                                        <input type="text" name="colour" class="form-control"
                                            placeholder="Enter engine size" value="{{ old('colour') }}">
                                        {{-- @if ($errors->has('colour'))
                                            <span class="text-danger">{{ $errors->first('colour') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="col-md-12">
                                        <label for="formFile" class="form-label">Other Car Images</label>
                                        <input class="form-control" name="othercarimages[]" type="file" multiple>
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
