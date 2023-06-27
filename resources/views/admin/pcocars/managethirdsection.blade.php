@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Pco Cars Third Section For PCO Cars</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item active">Third Section</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('/pcocarsthirdsection') }}"><button class="btn btn-outline-secondary"
                            style="float: right">Add</button></a>
                </div>
            </div>
            @if ($message = Session::get('session'))
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="scroll-vertical" class="table table-striped table-bordered table-sm"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Title</th>
                                        <th>Title Of Text</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcothirdHead as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->title_of_text }}</td>

                                            <td><a href="pcocarsthirdsectionhead/{{ $home->id }}/edit"
                                                    class="badge bg-secondary">Edit</a></td>
                                            <td><a href="pcocarsthirdsectionhead/{{ $home->id }}/delete"
                                                    class="badge bg-danger">Delete</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="scroll-vertical" class="table table-striped table-bordered table-sm"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcothird as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->description }}</td>

                                            <td><a href="pcocarsthirdsection/{{ $home->id }}/edit"
                                                    class="badge bg-secondary">Edit</a></td>
                                            <td><a href="pcocarsthirdsection/{{ $home->id }}/delete"
                                                    class="badge bg-danger">Delete</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>

        </div>
    </div>
@endsection
