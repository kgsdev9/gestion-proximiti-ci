


    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="teste/images/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css ">
        <!-- plugin css -->
        <link href="teste/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="teste/css/preloader.min.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="{{asset('teste/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('teste/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('teste/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>

        <body>
            @yield('content')


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
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                <!-- Datatable init js -->
                <script src="{{asset('teste/js/pages/datatables.init.js')}}"></script>

                <script src="{{asset('teste/js/app.js')}}"></script>
                <script>
                    $("#specialite").select2({
                    placeholder: "Select a specialite",
                    allowClear: true
                });
                </script>
                @include('flashy::message')
                @livewireScripts
            </body>
        </html>
    </div>
