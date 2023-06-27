@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Second Section For Home</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Home</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managehomesecondsection">Second Section</a></li>
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
                            <form action="{{ url('/') }}/homesecondsection/{{$homesecond->id}}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                            value="{{ old('title',$homesecond->title) }}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Image 1</label>
                                        <input class="form-control" name="image1" type="file">
                                        @if ($errors->has('image1'))
                                            <span class="text-danger">{{ $errors->first('image1') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Image 2</label>
                                        <input class="form-control" name="image2" type="file">
                                        @if ($errors->has('image2'))
                                            <span class="text-danger">{{ $errors->first('image2') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Image 3</label>
                                        <input class="form-control" name="image3" type="file">
                                        @if ($errors->has('image3'))
                                            <span class="text-danger">{{ $errors->first('image3') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Image 4</label>
                                        <input class="form-control" name="image4" type="file">
                                        @if ($errors->has('image4'))
                                            <span class="text-danger">{{ $errors->first('image4') }}</span>
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
