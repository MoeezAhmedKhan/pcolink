@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Follow Us Section For Footer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/managefootersection">Manage Footer</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/managefootersection">Follow Us</a></li>
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
                            <form action="{{ url('/') }}/footerfollowus/{{ $followus->id }}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                            value="{{ old('title', $followus->title) }}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Enter Text</label>
                                        <input type="text" name="titletext" class="form-control" placeholder="Enter Text"
                                            value="{{ old('titletext', $followus->text) }}">
                                        @if ($errors->has('titletext'))
                                            <span class="text-danger">{{ $errors->first('titletext') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Facebook Link</label>
                                        <input type="text" name="fblink" class="form-control" placeholder="Enter Facebook Link"
                                            value="{{ old('fblink', $followus->facebook) }}">
                                        @if ($errors->has('fblink'))
                                            <span class="text-danger">{{ $errors->first('fblink') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Instagram Link</label>
                                        <input type="text" name="instalink" class="form-control" placeholder="Enter Instagram Link"
                                            value="{{ old('instalink', $followus->instagram) }}">
                                        @if ($errors->has('instalink'))
                                            <span class="text-danger">{{ $errors->first('instalink') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholderInput" class="form-label">Enter Whatsapp</label>
                                        <input type="text" name="whatsapp" class="form-control" placeholder="Enter Whatsapp"
                                            value="{{ old('whatsapp', $followus->whatsapp) }}">
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
        </div>
    </div>
@endsection
