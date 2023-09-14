@extends('admin.layout')
@section('section')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Features Section For Pco Cars Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managepcocarsfeaturesection">Features Section</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/viewfeatures/{{$pcocarid}}/view">View Features</a></li>
                                <li class="breadcrumb-item active">Edit</li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/') }}/pcocarsfeature/{{$pcocarsfeature[0]->id}}/update/{{$pcocarid}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4 input_field_wrap">
                                    <div class="col-md-10">
                                        <label for="placeholderInput" class="form-label">Enter Feature</label>
                                        <input type="text" name="feature" class="form-control" value="{{$pcocarsfeature[0]->feature}}" placeholder="Enter Feature">
                                        @if ($errors->has('feature'))
                                            <span class="text-danger">{{ $errors->first('feature') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
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

