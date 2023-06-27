@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Images For Pco Cars </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage PCO Car</li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/managepcocarssecondsection">Second Section</a></li>
                                <li class="breadcrumb-item active">View Cars</li>
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
                            <table class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>View Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carimages as $img)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="{{$img->image_url}}" class="avatar-group-item"
                                                    data-bs-trigger="hover">
                                                    <img src="{{$img->image_url}}" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('pcocarsimages.edit', ['id' => $img->id,'pcocarsid'=>$pcocarsid]) }}" class="badge bg-secondary">Edit</a></td>
                                        <td><a href="/pcocarimage/{{ $img->id }}/delete/{{$pcocarsid}}" class="badge bg-danger">Delete</a></td>
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
