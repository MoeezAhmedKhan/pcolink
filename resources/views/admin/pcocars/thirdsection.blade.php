@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Third Section For Pco Cars</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add PCO Car</li>
                                <li class="breadcrumb-item active">Third Section</li>
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
                            <form action="{{ url('/') }}/pcocarsthirdsectionhead" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="placeholderInput" class="form-label">Section Title</label>
                                        <input type="text" name="section_title" class="form-control"
                                            placeholder="Enter section title" value="{{ old('section_title') }}">
                                        @if ($errors->has('section_title'))
                                            <span class="text-danger">{{ $errors->first('section_title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Section Title Text</label>
                                        <input class="form-control" name="title_of_text" type="text"
                                            placeholder="Enter text of title" value="{{ old('title_of_text') }}">
                                        @if ($errors->has('title_of_text'))
                                            <span class="text-danger">{{ $errors->first('title_of_text') }}</span>
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
                            <form action="{{ url('/') }}/pcocarsthirdsection" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4 input_field_wrap">
                                    <div class="col-md-12">
                                        <input type="button" name="addBtn" class="btn btn-dark add_field_button"
                                            value="Add More">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="exampleFormControlTextarea5" class="form-label">Image</label>
                                            <input class="form-control" name="img[]" required type="file">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formFile" class="form-label">Title</label>
                                            <input class="form-control" name="title[]" type="text"
                                                placeholder="Enter title" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exampleFormControlTextarea5" class="form-label">Short
                                                Description</label>
                                            <textarea class="form-control" name="description[]" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary" type="submit">Submit</button>
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

@push('whychooseus-script')
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
                        `<div class="row form-group mt-1"><div class="col-md-12"><input type="button" style="float: right" class="btn btn-danger remove_field" value="Remove"></div><div class="col-md-6"><label for="exampleFormControlTextarea5" class="form-label">Image</label><input class="form-control" name="img[]" required type="file"></div><div class="col-md-6"><label for="formFile" class="form-label">Title</label><input class="form-control" name="title[]" type="text" placeholder="Enter title" required></div><div class="col-md-12"><label for="exampleFormControlTextarea5" class="form-label">Short Description</label><textarea class="form-control" name="description[]" rows="3" required></textarea></div></div>`
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
