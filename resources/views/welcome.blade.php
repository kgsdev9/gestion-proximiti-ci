@extends('admin.layouts.app')

@section('title', 'Bienvenue sur gestion proximiti')
@section('master')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Bienvenue {{Auth::user()->name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Tableau de bord </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL ARTISAN </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$candidats}}">{{$candidats}}</span>
                                    </h4>
                                </div>


                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL SPECIALITES</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$specialite}}">{{$specialite}}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL UTILISATEURS</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$users}}">{{$users}}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-3 d-block text-truncate">TOTAL CLIENTS </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-3 d-block text-truncate">TOTAL DEVIS </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                  <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-3 d-block text-truncate">TOTAL EQUIPEMENT </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-3 d-block text-truncate">TOTAL MISSION </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-3 d-block text-truncate">TOTAL COMMANDE </span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->






            </div><!-- end row-->


            <div class="row">

                 @foreach ($artisans as $value)


                <div class="col-xl-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">


                            <div class="mx-auto mb-4">
                                <img src="{{asset('artisans/photo/'.$value->photo)}}" alt="" class="avatar-xl rounded-circle img-thumbnail">
                            </div>
                            <h5 class="font-size-16 mb-1"><a href="{{route('artisan.show', $value->id)}}" class="text-body">{{$value->name}} {{$value->prenom}}</a></h5>
                            <p class="text-muted mb-2">{{$value->specilaite->libelle}}</p>

                        </div>

                        <div class="btn-group" role="group">

                            <a href="{{route('artisan.show', $value->id)}}" class="btn btn-outline-light text-truncate"> <i class="fa-solid fa-eye"></i> Profile</a>
                            <a class="btn btn-outline-light text-truncate" href="https://web.whatsapp.com/send?phone=+225{{$value->num_whattsapp}}&amp;text=Bonjour%20Mr{{$value->name}}%20nous%avons%une%mission%pour%vous" target="_blank"> <i class="fa-brands fa-whatsapp"></i> Message</a>


                        </div>
                    </div>
                    <!-- end card -->
                </div>


                @endforeach






            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> ©Proximiti CI.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Copyright <a href="#" class="text-decoration-underline">©Proximiti CI.</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
