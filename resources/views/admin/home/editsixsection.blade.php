@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Sixth Section For Home</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Home</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managehomesixthsection">Sixth Section</a></li>
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
                            <form action="{{ url('/') }}/homesixthsection/{{ $homesix->id }}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Left Text</label>
                                        <input type="text" name="left_text" class="form-control"
                                            placeholder="Enter Left Title" value="{{ old('left_text', $homesix->left_text) }}">
                                        @if ($errors->has('left_text'))
                                            <span class="text-danger">{{ $errors->first('left_text') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Left Button Text</label>
                                        <input type="text" name="left_button_text" class="form-control"
                                            placeholder="Enter Left Title"
                                            value="{{ old('left_button_text', $homesix->left_button_text) }}">
                                        @if ($errors->has('left_button_text'))
                                            <span class="text-danger">{{ $errors->first('left_button_text') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Left Image</label>
                                        <input class="form-control" name="left_image" type="file">
                                        @if ($errors->has('left_image'))
                                            <span class="text-danger">{{ $errors->first('left_image') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Right Image</label>
                                        <input class="form-control" name="right_image" type="file">
                                        @if ($errors->has('right_image'))
                                            <span class="text-danger">{{ $errors->first('right_image') }}</span>
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
