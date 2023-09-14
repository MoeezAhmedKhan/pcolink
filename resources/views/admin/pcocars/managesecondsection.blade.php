@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Second Section For Pco Cars </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
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
                        <div class="card-body" style="overflow-x: auto;">
                            <h5>Car Details</h5>
                            <table id="myTable"
                                class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Car Name</th>
                                        <th>Condition</th>
                                        <th>Price</th>
                                        <th>Days Limit</th>
                                        <th>Car Type</th>
                                        <th>Year</th>
                                        <th>Main Image</th>
                                        <th>View Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcosecond as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->car_name }}</td>
                                            <td>{{ $home->condition }}</td>
                                            <td>{{ $home->price }}</td>
                                            <td>{{ $home->days_limit }}</td>
                                            <td>{{ $home->car_type }}</td>
                                            <td>{{ $home->year }}</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->image }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->image }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="viewpcocarimages/{{ $home->id }}/view" class="badge bg-success"><span class="fa fa-eye"></span></a></td>
                                            <td><a href="pcocarssecondsection/{{ $home->id }}/edit"
                                                    class="badge bg-secondary">Edit</a></td>
                                            <td><a href="pcocarssecondsection/{{ $home->id }}/delete" class="badge bg-danger">Delete</a></td>
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
