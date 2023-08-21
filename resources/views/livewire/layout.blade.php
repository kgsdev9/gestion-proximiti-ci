
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Espace d'authnetification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo_footer.png')}}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assetsauth/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{asset('assetsauth/css/bootstrap.min.css')}}">
        <!-- Icons Css -->
       
        <link href="{{asset('teste/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link rel="stylesheet" href="{{asset('assetsauth/css/app.min.css')}}">
        @livewireStyles
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        @yield('auth')

        <!-- JAVASCRIPT -->

        <script src="{{asset('assetsauth/js/jquery.min.js')}}"></script>
        <script src="{{asset('assetsauth/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assetsauth/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assetsauth/js/simplebar.min.js')}}"></script>
        <script src="{{asset('assetsauth/js/waves.min.js')}}"></script>
        <script src="{{asset('assetsauth/js/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('assetsauth/js/pace.min.js')}}"></script>
        <!-- password addon init -->

        <script src="{{asset('assetsauth/js/pass-addon.init.js')}}"></script>
        @livewireScripts

    </body>

</html>
