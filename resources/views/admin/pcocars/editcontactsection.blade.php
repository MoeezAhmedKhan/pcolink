@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Contact Section For Pco Cars Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managepcocardetailscontactsection">Contact Section</a></li>
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
                            <form action="{{ url('/') }}/pcocarscontactsection/{{$pcocarsContact->id}}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter Text</label>
                                        <input type="text" name="callnow" class="form-control" placeholder="Enter Text"
                                            value="{{ old('callnow',$pcocarsContact->text) }}">
                                        @if ($errors->has('callnow'))
                                            <span class="text-danger">{{ $errors->first('callnow') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Enter Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                        value="{{ old('address',$pcocarsContact->address) }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea5" class="form-label">Enter Number</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number"
                                        value="{{ old('number',$pcocarsContact->number) }}">
                                        @if ($errors->has('number'))
                                            <span class="text-danger">{{ $errors->first('number') }}</span>
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
