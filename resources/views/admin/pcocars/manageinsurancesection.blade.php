@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Insurance Section For PCO Cars Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item active">Insurance Section</li>
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
                                        <th>Car name</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcocarsinsurance as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->car_name }}</td>
                                            <td><a href="viewinsurance/{{ $home->id }}/view" class="badge bg-success"><span class="fa fa-eye"></span></a></td>
                                            <td><a href="pcocarsfeaturesection/{{ $home->id }}/delete" class="badge bg-danger">Delete</a></td>
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
