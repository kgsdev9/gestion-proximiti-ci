
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo_footer.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- plugin css -->
        <link href="teste/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- preloader css -->
        <link rel="stylesheet" href="teste/css/preloader.min.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="{{asset('teste/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('teste/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('teste/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body  style="font-family: 'Roboto', sans-serif;">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{url('/')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('logo_footer.png')}}" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('logo_footer.png')}}" alt="" height="24"> <span class="logo-txt">Proximiti</span>
                                </span>
                            </a>

                            <a href="{{url('/')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="teste/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="teste/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Proximiti</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                    </div>

                    <div class="d-flex">








                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('logo_footer.png')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->


                                <div class="dropdown-divider"></div>

                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="btn btn-white" type="submit"> <i class="mdi mdi-logout font-size-16 align-middle me-1"></i>Se Deconnecter</button>
                                    </form>

                            </div>
                        </div>

                    </div>
                </div>
            </header>



            @include('admin.slide-bar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('master')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('teste/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('teste/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('teste/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('teste/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('teste/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('teste/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('teste/libs/pace-js/pace.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('teste/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('teste/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('teste/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('teste/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('teste/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('teste/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('teste/js/pages/datatables.init.js')}}"></script>

        <script src="{{asset('teste/js/app.js')}}"></script>
       
        @include('flashy::message')
    </body>

</html>
