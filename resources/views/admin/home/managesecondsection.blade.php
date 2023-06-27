@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Second Section For Home</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Home</li>
                                <li class="breadcrumb-item active">Second Section</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            @if ($message = Session::get('session'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="scroll-vertical"
                                class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Title</th>
                                        <th>Image1</th>
                                        <th>Image2</th>
                                        <th>Image3</th>
                                        <th>Image4</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homesecond as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->title }}</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image1 }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image1 }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image2 }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image2 }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image3 }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image3 }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image4 }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image4 }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="homesecondsection/{{ $home->id }}/edit"
                                                    class="badge bg-secondary">Edit</a></td>
                                            <td><a href="homesecondsection/{{ $home->id }}/delete" class="badge bg-danger">Delete</a></td>
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
