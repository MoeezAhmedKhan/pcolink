@extends('admin.layout')
@section('section')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Benefit Section For Pco Cars Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managepcocardetailsbenefitsection">Benefits Section</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/viewbenefits/{{$pcocarid}}/view">View Benefits</a></li>
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
                            <form action="{{ url('/') }}/pcocarsbenefit/{{$pcocarsbenefit[0]->id}}/update/{{$pcocarid}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4 input_field_wrap">
                                    <div class="col-md-10">
                                        <label for="placeholderInput" class="form-label">Enter Benefit</label>
                                        <input type="text" name="benefit" class="form-control" value="{{$pcocarsbenefit[0]->benefit}}" placeholder="Enter Benefit">
                                        @if ($errors->has('benefit'))
                                            <span class="text-danger">{{ $errors->first('benefit') }}</span>
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

