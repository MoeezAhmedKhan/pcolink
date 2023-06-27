@extends('admin.layout')
@section('section')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add First Section For Help</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Help</li>
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
                            <form action="{{ url('/') }}/helpsection1" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Title" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Title Text</label>
                                        <input type="text" name="titletext" class="form-control"
                                            placeholder="Enter Title Text" value="{{ old('titletext') }}">
                                        @if ($errors->has('titletext'))
                                            <span class="text-danger">{{ $errors->first('titletext') }}</span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/') }}/helpsection2" method="post">
                                @csrf
                                <div class="row gy-4 input_field_wrap">
                                    <div class="col-md-12">
                                        <input type="button" name="addBtn" class="btn btn-dark add_field_button"
                                            value="Add More" style="width: 10%;">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="placeholderInput" class="form-label">Question</label>
                                            <input type="text" name="question[]" required class="form-control"
                                                placeholder="Enter Question" value="{{ old('question') }}">
                                            @if ($errors->has('question'))
                                                <span class="text-danger">{{ $errors->first('question') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exampleFormControlTextarea5" class="form-label">Answer</label>
                                            <textarea class="form-control" name="answer[]" required rows="3">{{ old('answer') }}</textarea>
                                            @if ($errors->has('answer'))
                                                <span class="text-danger">{{ $errors->first('answer') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-3">
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

@push('help-script')
    <script>
        $(document).ready(function() {
            var max_field = 49;
            var wrapper = $(".input_field_wrap");
            var add_button = $(".add_field_button");
            var x = 1;

            $(add_button).click(function(e) {
                e.preventDefault();
                if (x <= max_field) {
                    $(wrapper).append(
                        '<div class="form-group"><div class="col-md-12"><label for="placeholderInput" class="form-label">Question</label><input type="button" style="float: right" class="btn btn-danger remove_field" value="Remove"><input type="text" name="question[]" required class="form-control" placeholder="Enter Question"></div><div class="col-md-12"><label for="exampleFormControlTextarea5" class="form-label">Answer</label><textarea class="form-control" name="answer[]" required rows="3"></textarea></div></div>'
                    );
                    x++
                } else if (x > max_field) {
                    alert("You can't add textboxs you can add 50 question only");
                }
            });
            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).closest('.form-group').remove();

                x--;
            })
        });
    </script>
@endpush
