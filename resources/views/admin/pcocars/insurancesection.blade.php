@extends('admin.layout')
@section('section')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Insurance Section For Pco Cars Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add PCO Car</li>
                                <li class="breadcrumb-item active">Insurance Section</li>
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
                            <form action="{{ url('/') }}/pcocardetailsinsurancesection" id="myForm" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-select mb-3" name="car" id="cars" required>
                                            <option disabled>Select a Car</option>
                                            @foreach ($pcocars as $item)
                                                <option value="{{ $item->id }}">{{ $item->car_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row gy-4 input_field_wrap">
                                    <div class="col-md-10">
                                        <label for="placeholderInput" class="form-label">Enter Insurance</label>
                                        <input type="text" name="insurance[]" required class="form-control"
                                            placeholder="Enter Insurance">
                                    </div>
                                    <div class="col-md-2">
                                        <p for="placeholderInput" class="form-label">Action</p>
                                        <input type="button" name="addBtn" class="btn btn-dark add_field_button"
                                            value="Add More">
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

@push('feature-script')
    <script>
        $(document).ready(function() {
            var max_field = 29;
            var wrapper = $(".input_field_wrap");
            var add_button = $(".add_field_button");
            var x = 1;

            $(add_button).click(function(e) {
                e.preventDefault();
                if (x <= max_field) {
                    $(wrapper).append(
                        '<div class="col-md-10"><input type="text" name="insurance[]" required class="form-control" placeholder="Enter Insurance"></div><div class="col-md-2"><input type="button" class="btn btn-danger remove_field" value="Remove"></div>'
                    );
                    x++
                } else if (x > max_field) {
                    alert("You can't add textbox you can add 30 insurance only");
                }
            });
            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).closest('.col-md-2').prev('.col-md-10').remove();
                $(this).closest('.col-md-2').remove();
                x--;
            })
        });
    </script>
@endpush
