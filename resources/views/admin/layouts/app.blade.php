
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo_footer.png')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- plugin css -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- selec2 cdn --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- preloader css -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{asset('teste/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('teste/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('teste/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @livewireStyles

    </head>

    <body  style="font-family: 'Inter', sans-serif;">

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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="{{asset('teste/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('teste/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('teste/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('teste/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('teste/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('teste/libs/pace-js/pace.min.js')}}"></script>


        <script src="{{asset('teste/libs/pace-js/pace.min.js')}}"></script>
        <!-- Required datatable js -->
        <script src="{{asset('teste/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('teste/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>

        <script>
            $(document).ready(function() {
            $('#summernote').summernote();
            });
        </script>
        <!-- Responsive examples -->
        <script src="{{asset('teste/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('teste/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <!-- Datatable init js -->
        <script src="{{asset('teste/js/pages/datatables.init.js')}}"></script>

        <script src="{{asset('teste/js/app.js')}}"></script>
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        </script>
        @include('flashy::message')
        @livewireScripts
        <script src="{{asset('custome/mast.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
          $(document).ready(function() {
              $('.select2-multiple').select2({
                  placeholder: "Selectionner le type de mission",
                  allowClear: true
              });

          });

      </script>
    </body>

</html>
