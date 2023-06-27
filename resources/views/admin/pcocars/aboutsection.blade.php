@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add About Section For Pco Car Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add PCO Car</li>
                                <li class="breadcrumb-item active">About Section</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/') }}/pcocardetailsaboutsection" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if ($errors->has('car'))
                                            <span class="text-danger">{{ $errors->first('car') }}</span>
                                        @endif
                                        <select class="form-select mb-3" name="car" aria-label="Default select example">
                                            <option selected disabled>Select Car </option>
                                            @foreach ($pcocars as $item)
                                                <option value="{{ $item->id }}">{{ $item->car_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea5" class="form-label">Enter About</label>
                                        <textarea class="form-control" name="about" id="editor" rows="5">{{ old('about') }}</textarea>
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
        </div>
    </div>
@endsection
