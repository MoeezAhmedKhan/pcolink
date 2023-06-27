@extends('admin.layout')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Analytics</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboards</a></li>
                                <li class="breadcrumb-item active">Analytics</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-column h-100">
                                        <p class="fs-md text-muted mb-4">Total Uploaded Cars</p>
                                        <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="{{$gettotalCars}}">0</span>
                                            <small class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>Till Now</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-column h-100">
                                        <p class="fs-md text-muted mb-4">Total User Contacts</p>
                                        <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="{{$getuserContact}}">0</span>
                                            <small class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>Till Now</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-column h-100">
                                        <p class="fs-md text-muted mb-4">Total FAQ</p>
                                        <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="{{$getFaq}}">0</span>
                                            <small class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>Till Now</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
