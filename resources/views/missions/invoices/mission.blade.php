<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><br>
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
                                                <h4>Type de mission : {{$ressource->libelle}}</h4>
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
                                        {{-- <img class="img-circle img-bordered-sm" src="{{public_path('artisans/photo/'.$ressource->artisan->photo)}}" alt="user image"> --}}


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


</body>
</html>
