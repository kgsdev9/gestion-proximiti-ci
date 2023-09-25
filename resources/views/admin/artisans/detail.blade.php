@extends('admin.layouts.app')

@section('master')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Accueil</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail</a></li>
                                <li class="breadcrumb-item active">Artisan </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm order-2 order-sm-1">
                                    <div class="d-flex align-items-start mt-3 mt-sm-0">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xl me-3">
                                                <img src="{{asset('artisans/photo/'.$singleRessourceArtisan->photo)}}" alt="" class="img-fluid rounded-circle d-block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                <h5 class="font-size-16 mb-1">{{$singleRessourceArtisan->name}} {{$singleRessourceArtisan->prenom}}</h5>
                                                <p class="text-muted font-size-13">
                                                    @foreach ($singleRessourceArtisan->specialites as  $specialite)
                                                                    {{$specialite->libelle}}
                                                    @endforeach

                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab" aria-selected="true">Information artisan </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab" aria-selected="false" tabindex="-1">Fifchiers</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab" aria-selected="false" tabindex="-1">Missions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="overview" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Nom Prenom</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p class="mb-2">{{$singleRessourceArtisan->name}}     {{$singleRessourceArtisan->prenom}}</p>

                                                    </div>
                                                </div>


                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Spécialité metier</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p class="mb-2">
                                                            @foreach ($singleRessourceArtisan->specialites as  $specialite)
                                                            {{$specialite->libelle}}
                                                            @endforeach
                                                        </p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Télephone :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p> {{$singleRessourceArtisan->telephone}}</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15"> Numero WHATTSAP :</h5>
                                                    </div>
                                                </div>

                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p>  {{$singleRessourceArtisan->num_whattsapp}}</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>



                                        <div class="py-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Adresse :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p>  {{$singleRessourceArtisan->adresse}}</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15"> Commune :</h5>
                                                    </div>
                                                </div>

                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p>  {{$singleRessourceArtisan->commune}}</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>



                                        <div class="py-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Zone intervention:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p>  {{$singleRessourceArtisan->zone_intervention}}</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Date d'adhesion :</h5>
                                                    </div>
                                                </div>

                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p>  {{$singleRessourceArtisan->date_adhesion}}</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>






                                    </div>
                                </div>

                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                            <!-- end card -->
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="about" role="tabpanel">
                            <div class="card">
                                <div class="card-body">


                                    <div>
                                        <div class="pb-3">

                                            @foreach ($singleRessourceArtisan->medias as $value )

                                            <a href=""><iframe src="{{asset('programme/'.$value->image)}}"  frameborder="0" style="height:700px; width:900px;"></iframe></a>
                                             @endforeach
                                        </div>


                                    </div>
                                </div>

                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="post" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Missions</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">

                                                 @foreach ($allMissions as $mission)


                                                <div class="mt-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-15 text-truncate"><a href="#" class="text-body">{{$mission->libelle}}</a></h5>
                                                            <p class="font-size-13 text-muted mb-0"> Date début {{$mission->date_debut}}        Date fin {{$mission->date_fin}}</p>
                                                        </div>

                                                    </div>


                                                    <div class="pt-3">
                                                        <ul class="list-inline">
                                                            @foreach ($mission->specialites as $specialite)

                                                            <li class="list-inline-item me-3">
                                                                <a href="javascript: void(0);" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> {{$specialite->libelle}}
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        <p class="text-muted">{{$mission->description}}</p>

                                                        <div>
                                                            <a href="{{route('missions.show', $mission->id)}}" class="text-primary" target="_blank">Consulter la mission <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end post -->

                                                @endforeach
                                                <!-- end post -->
                                            </div>
                                            <!-- end col -->

                                        </div>
                                        <!-- end row -->

                                        <div class="row g-0 mt-4">
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="float-sm-end">
                                                    <ul class="pagination mb-sm-0">
                                                        {{$allMissions->links()}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end col -->


                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>


@endsection
