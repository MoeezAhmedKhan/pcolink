@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit First Section For Apply</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/manageapplyfirstsection">Manage Apply</a></li>
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
                            <form action="{{ url('/') }}/applyfirstsection/{{ $applyfirst->id }}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Home Town (Like California, United
                                            States)</label>
                                        <input type="text" name="town" class="form-control"
                                            placeholder="Enter Home Town" value="{{ old('town',$applyfirst->home_town) }}">
                                        @if ($errors->has('town'))
                                            <span class="text-danger">{{ $errors->first('town') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Complete Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Complete Address"
                                            value="{{ old('address',$applyfirst->complete_address) }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
                                            value="{{ old('phone',$applyfirst->phone) }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Timing (Like Mon to Fri 9am to 6
                                            pm)</label>
                                        <input type="text" name="timing" class="form-control" placeholder="Enter Timing"
                                            value="{{ old('timing',$applyfirst->timing) }}">
                                        @if ($errors->has('timing'))
                                            <span class="text-danger">{{ $errors->first('timing') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                            value="{{ old('email',$applyfirst->email) }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Email Text (Like Send us your query
                                            anytime!)</label>
                                        <input type="text" name="emailtext" class="form-control" placeholder="Enter Email Text"
                                            value="{{ old('emailtext',$applyfirst->email_text) }}">
                                        @if ($errors->has('emailtext'))
                                            <span class="text-danger">{{ $errors->first('emailtext') }}</span>
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
