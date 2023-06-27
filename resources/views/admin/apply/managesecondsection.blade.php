@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Contacts Data</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Get Contact Data</li>
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
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <a href="/allontactsdelete"><button class="badge bg-dark">Delete All</button></a>
                                </div>
                            </div>
                            <table id="myTable"
                                class="table table-bordered dt-responsive nowrap align-middle mdl-data-table">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Postal Code</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applysecond as $index => $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->name }}</td>
                                            <td>{{ $home->email }}</td>
                                            <td>{{ $home->city }}</td>
                                            <td>{{ $home->postal_code }}</td>
                                            <td>{{ $home->phone }}</td>
                                            <td>{{ $home->address }}</td>
                                            <td>{{ $home->message }}</td>
                                            <td>{{ $formattedDatetime[$index] }}</td>
                                            <td><a href="contact/{{ $home->id }}/delete" class="badge bg-danger">Delete</a></td>
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
