
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="cette application est la proprieté intellectuelle de proximiti" name="description" />
        <meta content="Dévéloppé par KGS INFORMATIQUE" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo_footer.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- plugin css -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- select 2 cdn --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- preloader css -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{asset('ressources/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('ressources/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetsauth/css/icons.min.css')}}">
        <!-- App Css-->
        <link href="{{asset('ressources/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('styles')
        @livewireStyles
    </head>

    <body  style="font-family: 'Inter',sans-serif;">

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
                                    <img src="ressources/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="ressources/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Proximiti</span>
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
            <!-- initiation du contenu dynamique -->
            @yield('master')
            <!-- fin  initiation du contenu dynamique -->
        </div>
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="{{asset('ressources/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('ressources/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('ressources/libs/simplebar/simplebar.min.js')}}"></script>
        <!-- Requis pour la base de données datatable js -->
        <script src="{{asset('ressources/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('ressources/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Responsive exemple pour la datatable -->
        <script src="{{asset('ressources/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <!-- Datatable initialisation avec le cdn js -->
        <script src="{{asset('ressources/js/pages/datatables.init.js')}}"></script>
        <script src="{{asset('custome/mast.js')}}"></script>
        <script src="{{asset('ressources/js/app.js')}}"></script>
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        </script>
        @include('flashy::message')
        @livewireScripts
        @stack('scripts')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                       By KGS INFORMAITIQUE.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            <script>document.write(new Date().getFullYear())</script> <a href="">PROXIMITI</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
