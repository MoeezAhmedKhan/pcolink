<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="light" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <title>Dashboard | Pco Link</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_theme/images/fav.png') }}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- jsvectormap css -->
    <link href="{{ asset('admin_theme/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

    {{-- Remix Icon CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- MaterialDesign --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!--Swiper slider css-->
    <link href="{{ asset('admin_theme/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="{{ asset('admin_theme/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_theme/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons Css -->
    {{-- <link href="{{ asset('admin_theme/css/icons.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <!-- App Css-->
    <link href="{{ asset('admin_theme/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{ asset('admin_theme/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css">
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/dashboard') }}" class="logo logo-dark">
                    <span class="fav">
                        <img src="{{ asset('admin_theme/images/fav.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin_theme/images/logo-dark.png') }}" alt="" height="22">
                    </span>
                </a>
                <a href="{{ url('/dashboard') }}" class="logo logo-light">
                    {{-- <span class="fav">
                        <img src="{{ asset('admin_theme/images/fav.png') }}" alt="" height="22">
                    </span> --}}
                    <span class="logo-lg">
                        <img src="{{ asset('admin_theme/images/admin-logo.png') }}" alt="" height="22">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link menu-link"> <i
                                    class="fas fa-chart-line"></i>
                                <span data-key="t-calendar">Analytics</span> </a>
                        </li>
                        <li class="menu-title"><span data-key="t-menu">Add</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#AddeHome" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="AddeHome">
                                <i class="fas fa-pencil-alt"></i> <span data-key="t-dashboards">Add Home</span>
                            </a>
                            <div class="collapse menu-dropdown" id="AddeHome">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/homefirstsection') }}" class="nav-link"
                                            data-key="t-analytics">
                                            Add First Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/homesecondsection') }}" class="nav-link" data-key="t-crm">
                                            Add Second Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/homethirdsection') }}" class="nav-link"
                                            data-key="t-analytics">Add Third Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/homefourthsection') }}" class="nav-link" data-key="t-crm">
                                            Add Fourth Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/homefifthsection') }}" class="nav-link" data-key="t-crm">
                                            Add Fifth Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/homesixthsection') }}" class="nav-link" data-key="t-crm">
                                            Add Sixth Section </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#AddPcoCar" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="AddPcoCar">
                                <i class="fas fa-pencil-alt"></i> <span data-key="t-dashboards">Add PCO Car</span>
                            </a>
                            <div class="collapse menu-dropdown" id="AddPcoCar">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocarsfirstsection') }}" class="nav-link"
                                            data-key="t-analytics">
                                            Add First Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocarssecondsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Add Second Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocarsthirdsection') }}" class="nav-link"
                                            data-key="t-analytics">Add Third Section </a>
                                    </li>
                                    <li class="menu-title"><span data-key="t-menu">PCO Car Details</span></li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocardetailsaboutsection') }}" class="nav-link"
                                            data-key="t-analytics">Add About Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocardetailsfeaturesection') }}" class="nav-link"
                                            data-key="t-analytics">Add Features Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocardetailsinsurancesection') }}" class="nav-link"
                                            data-key="t-analytics">Add Insurance Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocardetailsbenefitsection') }}" class="nav-link"
                                            data-key="t-analytics">Add Benefits Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/pcocardetailscontactsection') }}" class="nav-link"
                                            data-key="t-analytics">Add Contact Section </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/helpsection">
                                <i class="fas fa-pencil-alt"></i> <span data-key="t-dashboards">Add Help</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/applyfirstsection') }}">
                                <i class="fas fa-pencil-alt"></i> <span data-key="t-dashboards">Add Apply</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="footersection">
                                <i class="fas fa-pencil-alt"></i> <span data-key="t-dashboards">Add Footer</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Manage</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#ManageHome" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="ManageHome">
                                <i class="fa fa-edit"></i> <span data-key="t-dashboards">Manage Home</span>
                            </a>
                            <div class="collapse menu-dropdown" id="ManageHome">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/mamagehomefirstsection') }}" class="nav-link"
                                            data-key="t-analytics">
                                            Manage First Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managehomesecondsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Manage Second Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managehomethirdsection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Third Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managehomefourthsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Manage Fourth Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managehomefifthsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Manage Fifth Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managehomesixthsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Manage Sixth Section </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#managePcoCar" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="managePcoCar">
                                <i class="fas fa-edit"></i> <span data-key="t-dashboards">Manage PCO Car</span>
                            </a>
                            <div class="collapse menu-dropdown" id="managePcoCar">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocarsfirstsection') }}" class="nav-link"
                                            data-key="t-analytics">
                                            Manage First Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocarssecondsection') }}" class="nav-link"
                                            data-key="t-crm">
                                            Manage Second Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocarsthirdsection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Third Section </a>
                                    </li>
                                    <li class="menu-title"><span data-key="t-menu">PCO Car Details</span></li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocardetailsaboutsection') }}" class="nav-link"
                                            data-key="t-analytics">Manage About Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocarsfeaturesection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Features Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocardetailsinsurancesection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Insurance Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocardetailsbenefitsection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Benefits Section </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/managepcocardetailscontactsection') }}" class="nav-link"
                                            data-key="t-analytics">Manage Contact Section </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/managehelpfirstsection">
                                <i class="fas fa-edit"></i> <span data-key="t-dashboards">Manage Help</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/manageapplyfirstsection') }}">
                                <i class="fas fa-edit"></i> <span data-key="t-dashboards">Manage Apply</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/getcontactdetails') }}">
                                <i class="fas fa-edit"></i> <span data-key="t-dashboards">Get Contact Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/managefootersection') }}">
                                <i class="fas fa-edit"></i> <span data-key="t-dashboards">Manage Footer</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ url('/') }}" class="logo logo-dark">
                                <span class="fav">
                                    <img src="{{ asset('admin_theme/images/fav.png') }}" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin_theme/images/logo-dark.png') }}" alt=""
                                        height="22">
                                </span>
                            </a>

                            <a href="{{ url('/') }}" class="logo logo-light">
                                <span class="fav">
                                    <img src="{{ asset('admin_theme/images/fav.png') }}" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin_theme/images/z.png') }}" alt=""
                                        height="22">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bi bi-arrows-fullscreen fs-lg'></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-sun align-middle fs-3xl"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                <a href="#!" class="dropdown-item" data-mode="light"><i
                                        class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                <a href="#!" class="dropdown-item" data-mode="dark"><i
                                        class="bi bi-moon align-middle me-2"></i> Dark</a>
                                <a href="#!" class="dropdown-item" data-mode="auto"><i
                                        class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('admin_theme/images/users/i.png') }}"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        @if (Session::get('adminname'))
                                            <span
                                                class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Session::get('adminname') }}</span>
                                        @endif
                                        <span
                                            class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Administrator</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                    <form action="{{ url('/') }}/logout" method="post" class="inline">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i><span class="align-middle" data-key="t-logout">Logout</span></button>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- removeCartModal -->
        <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-cartmodal"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-5"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


            @yield('section')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Steex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="addAmount" tabindex="-1" aria-labelledby="addAmountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addAmountLabel">Add Amount</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#!">
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <div>
                                    <label for="AmountInput" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="AmountInput"
                                        placeholder="$000.00">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">Select Method</label>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <label class="border rounded w-100 form-label p-2">
                                            <input class="form-check-input me-1" name="exampleRadios" type="radio"
                                                value="" checked>
                                            Visa
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="border rounded w-100 form-label p-2">
                                            <input class="form-check-input me-1" name="exampleRadios" type="radio"
                                                value="">
                                            Mastercard
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="border rounded w-100 form-label p-2">
                                            <input class="form-check-input me-1" name="exampleRadios" type="radio"
                                                value="">
                                            Credit Card
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <label for="cardNumber" class="form-label">Card Number</label>
                                    <input type="number" class="form-control" id="cardNumber"
                                        placeholder="xxxx xxxx xxxx xxxx">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>
                                    <label for="month" class="form-label">Expiry Date</label>
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" id="month"
                                                placeholder="MM">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" id="years"
                                                placeholder="YYYY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <label for="cvv/cvc" class="form-label">CVV/CVC</label>
                                    <input type="number" class="form-control" id="cvv/cvc" placeholder="***">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <label for="cardHoldersName" class="form-label">Cardholders Name</label>
                                    <input type="text" class="form-control" id="cardHoldersName"
                                        placeholder="Enter name">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                            class="ph-x align-middle"></i> Close</button>
                    <button type="button" class="btn btn-primary">Add Amount</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->

    <!-- Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-body p-0 ribbon-box">
                    <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                        <span class="trending-ribbon-text">Trending</span> <i
                            class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <div class="bg-primary-subtle p-5 h-100">
                                <div class="p-lg-4">
                                    <img src="{{ asset('admin_theme/images/products/img-3.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-7">
                            <div class="p-4 h-100">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <a href="#!">
                                    <h5 class="mb-1">Craft Women Black Sling Bag</h5>
                                </a>
                                <p class="text-muted">Fashion & Clothing</p>

                                <h5 class="mb-3">$199.99 <del class="text-muted fs-sm fw-normal">$299.99</del></h5>

                                <ul class="list-unstyled hstack gap-2 mb-4">
                                    <li>
                                        Available Colors
                                    </li>
                                    <li>
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded bg-primary-subtle"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded bg-success-subtle"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded bg-danger-subtle"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded bg-dark-subtle"></div>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="list-unstyled vstack gap-2 mb-4">
                                    <li class=""><i
                                            class="bi bi-check2-circle me-2 align-middle text-success"></i>In stock
                                    </li>
                                    <li class=""><i
                                            class="bi bi-check2-circle me-2 align-middle text-success"></i>Free
                                        delivery available</li>
                                    <li class=""><i
                                            class="bi bi-check2-circle me-2 align-middle text-success"></i>Sales 10%
                                        Off Use Code: <b>STEEX10</b></li>
                                </ul>

                                <div class="hstack gap-2 justify-content-end">
                                    <button class="btn btn-primary"><i class="bi bi-cart align-baseline me-1"></i> Add
                                        To Cart</button>
                                    <button class="btn btn-subtle-secondary">View Details <i
                                            class="bi bi-arrow-right align-baseline ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Modal -->


    <!--start back-to-top-->
    <button class="btn btn-dark btn-icon" id="back-to-top">
        <i class="bi bi-caret-up fs-3xl"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class="bi bi-gear mb-1"></i> Customizer
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <div class="me-2">
                <h5 class="mb-1 text-white">Steex Builder</h5>
                <p class="text-white text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
            </div>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="fs-md mb-1">Layout</h6>
                    <p class="text-muted fs-sm">Choose your layout</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 fs-md mb-1">Theme</h6>
                    <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme01" name="data-theme" type="radio" value="default"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme01">
                                    <img src="{{ asset('admin_theme/images/custom-theme/light-mode.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme02" name="data-theme" type="radio" value="material"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme02">
                                    <img src="{{ asset('admin_theme/images/custom-theme/material.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme03" name="data-theme" type="radio" value="creative"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme03">
                                    <img src="{{ asset('admin_theme/images/custom-theme/creative.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme04" name="data-theme" type="radio" value="minimal"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme04">
                                    <img src="{{ asset('admin_theme/images/custom-theme/minimal.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme05" name="data-theme" type="radio" value="modern"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme05">
                                    <img src="{{ asset('admin_theme/images/custom-theme/modern.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                        </div>
                        <!-- end col -->
                        <div class="col-6">
                            <div class="form-check card-radio">
                                <input id="customizer-theme06" name="data-theme" type="radio" value="interaction"
                                    class="form-check-input">
                                <label class="form-check-label p-0" for="customizer-theme06">
                                    <img src="{{ asset('admin_theme/images/custom-theme/interaction.png') }}"
                                        alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Interaction</h5>
                        </div><!-- end col -->
                    </div>

                    <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                    <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 bg-transparent" for="layout-mode-light">
                                        <img src="{{ asset('admin_theme/images/custom-theme/light-mode.png') }}"
                                            alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 bg-transparent" for="layout-mode-dark">
                                        <img src="{{ asset('admin_theme/images/custom-theme/dark-mode.png') }}"
                                            alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio brand">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-brand" value="brand" disabled>
                                    <h6
                                        class="text-danger fs-18 lh-base text-center position-absolute top-50 start-50 translate-middle z-1 mb-0">
                                        Coming Soon</h6>
                                    <label class="form-check-label cursor-none p-0 bg-transparent opacity-75"
                                        for="layout-mode-brand">
                                        <img src="{{ asset('admin_theme/images/custom-theme/brand-mode.png') }}"
                                            alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Brand</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                        <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                        <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                    <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                        <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100"
                                        for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                        <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                        <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                    aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                        <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span
                                        class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-3xl"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="{{ asset('admin_theme/images/sidebar/img-sm-1.jpg') }}"
                                        alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="{{ asset('admin_theme/images/sidebar/img-sm-2.jpg') }}"
                                        alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="{{ asset('admin_theme/images/sidebar/img-sm-3.jpg') }}"
                                        alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="{{ asset('admin_theme/images/sidebar/img-sm-4.jpg') }}"
                                        alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                        <p class="text-muted fs-sm">Choose a preloader.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="spinner-border text-primary avatar-xxs m-auto"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </span>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                            </div>
                        </div>

                    </div><!-- end preloader-menu -->
                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin_theme/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_theme/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_theme/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin_theme/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('admin_theme/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin_theme/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('admin_theme/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('admin_theme/libs/list.js/list.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('admin_theme/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin_theme/js/app.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    @stack('feature-script')
    @stack('help-script')
    @stack('whychooseus-script')
</body>

</html>
