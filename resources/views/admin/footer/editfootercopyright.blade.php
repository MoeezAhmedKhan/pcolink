@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Copyright Us Section For Footer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/managefootersection">Manage Footer</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/') }}/managefootersection">Copyright</a></li>
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
                            <form action="{{ url('/') }}/footercopyright/{{ $copyright->id }}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="placeholderInput" class="form-label">Enter Copyright</label>
                                        <input type="text" name="copyright" class="form-control" placeholder="Enter Copyright"
                                            value="{{ old('copyright', $copyright->copyright) }}">
                                        @if ($errors->has('copyright'))
                                            <span class="text-danger">{{ $errors->first('copyright') }}</span>
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
