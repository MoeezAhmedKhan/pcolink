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
                                <li class="breadcrumb-item active">Sixth Section</li>
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
                                        <th>Section Left Text</th>
                                        <th>Section Left Button Text</th>
                                        <th>Section Left Image</th>
                                        <th>Section Right Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homesix as $home)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home->left_text }}</td>
                                            <td>{{ $home->left_button_text }}</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->left_image }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->left_image }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="uploads/{{ $home->right_image }}" class="avatar-group-item"
                                                        data-bs-trigger="hover">
                                                        <img src="uploads/{{ $home->right_image }}" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="homesixthsection/{{ $home->id }}/edit"
                                                    class="badge bg-secondary">Edit</a></td>
                                            <td><a href="homesixthsection/{{ $home->id }}/delete" class="badge bg-danger">Delete</a></td>
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
