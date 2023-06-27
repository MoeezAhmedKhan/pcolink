@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Second Section For Help</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/managehelpfirstsection">Manage Help</a></li>
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
                            <form action="{{ url('/') }}/helpsecondsection/{{$helpsecond->id}}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="placeholderInput" class="form-label">Question</label>
                                        <input type="text" name="question" class="form-control" placeholder="Enter Question"
                                            value="{{ old('question',$helpsecond->question) }}">
                                        @if ($errors->has('question'))
                                            <span class="text-danger">{{ $errors->first('question') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea5" class="form-label">Answer</label>
                                        <textarea class="form-control" name="answer" rows="3">{{ old('answer',$helpsecond->answer) }}</textarea>
                                        @if ($errors->has('answer'))
                                            <span class="text-danger">{{ $errors->first('answer') }}</span>
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
