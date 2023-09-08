@extends('admin.layouts.app')

 @section('master')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- end page title -->
            <div class="content-wrapper" style="margin-top:-70px;">

                <section class="content">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>{{$ressource->libelle}}</h4>
                                            <div class="post clearfix">
                                                <div class="user-block">
                                                    <span class="username"><a href="#">Déscription de la mission</a></span>

                                                </div>
                                                <p>
                                                  {{$ressource->description}}
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i>Attribution à l'artisan </h3>
                                    <img class="img-circle img-bordered-sm" src="{{asset('artisans/photo/'.$ressource->artisan->photo)}}" alt="user image">


                                    <br>
                                    <div class="text-muted">
                                        <p class="text-sm">
                                            Nom et prénom
                                            <b class="d-block">{{$ressource->artisan->name}} {{$ressource->artisan->prenom}}</b>
                                        </p>

                                    </div>
                                    <h5 class="mt-5 text-muted">
                                       Taches
                                    </h5>
                                    <ul class="list-unstyled">

                                        @foreach ($ressource->specialites as  $value)
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> {{$value->libelle}}</a>
                                        </li>
                                        @endforeach



                                    </ul>
                                    <div class="text-center mt-5 mb-3">
                                        <a href="{{route('invoice.missions', $ressource->id)}}" class="btn btn-sm btn-primary">Télecharger</a>
                                        <a href="#" class="btn btn-sm btn-warning">Transferer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>





        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
 @endsection
