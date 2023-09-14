@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Second Section For Pco Cars</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managepcocarssecondsection">Second Section</a></li>
                                <li class="breadcrumb-item active">Edit</li>
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
                            <h5 class="mb-4">Edit Car Details</h5>
                            <form action="{{ url('/') }}/pcocarssecondsection/{{$pcosecond->id}}/update" method="post"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car name</label>
                                        <input type="text" name="car_name" class="form-control"
                                            placeholder="Enter car name" value="{{old('car_name',$pcosecond->car_name)}}">
                                        @if ($errors->has('car_name'))
                                            <span class="text-danger">{{ $errors->first('car_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Car Image</label>
                                        <input class="form-control" name="image" type="file">
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Condition (Like Used 19/20 Plote)</label>
                                        <input type="text" name="condition" class="form-control"
                                            placeholder="Enter car Condition" value="{{old('condition',$pcosecond->condition)}}">
                                        @if ($errors->has('condition'))
                                            <span class="text-danger">{{ $errors->first('condition') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car price</label>
                                        <input type="text" name="price" class="form-control"
                                            placeholder="Enter car price" value="{{old('price',$pcosecond->price)}}">
                                        @if ($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Days Limit (Like Per week)</label>
                                        <input type="text" name="days_limit" class="form-control"
                                            placeholder="Enter Days Limit" value="{{old('days_limit',$pcosecond->days_limit)}}">
                                        @if ($errors->has('days_limit'))
                                            <span class="text-danger">{{ $errors->first('days_limit') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car Type (Like Fully Hybrid Car)</label>
                                        <input type="text" name="car_type" class="form-control"
                                            placeholder="Enter car type" value="{{old('car_type',$pcosecond->car_type)}}">
                                        @if ($errors->has('car_type'))
                                            <span class="text-danger">{{ $errors->first('car_type') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Car year</label>
                                        <input type="text" name="year" class="form-control"
                                            placeholder="Enter car year" value="{{old('year',$pcosecond->year)}}">
                                        @if ($errors->has('year'))
                                            <span class="text-danger">{{ $errors->first('year') }}</span>
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
