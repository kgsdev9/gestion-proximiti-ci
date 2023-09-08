@extends('admin.layouts.app')
@section('title', 'Catalogue client')
@section('master')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Catalogue Missions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{route('missions.create')}}" class="form-control">Nouvelle mission</a>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Clients</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <br>
            <div class="col-xl-12">
                <div >
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($allMissions as $value)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-header pb-2">
                                      <div class="d-flex align-items-start">
                                        <div class="d-flex align-items-start">
                                          <div class="avatar me-3">
                                            <img src="{{asset('artisans/photo/'.$value->artisan->photo)}}" style="height:30px;" alt="Avatar" class="rounded-circle">
                                          </div>
                                          <div class="me-2">
                                            <h5 class="mb-1"><a href="{{route('missions.show', $value->id)}}" class="stretched-link text-heading">{{$value->libelle}}</a></h5>
                                            <div class="client-info text-body"><span class="fw-medium">Client: </span><span>{{$value->client->nom}}</span></div>
                                          </div>
                                        </div>
                                        <div class="ms-auto">
                                          <div class="dropdown zindex-2">
                                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical mdi-24px text-muted"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Rename project</a></li>
                                              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">View details</a></li>
                                              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Add to favorites</a></li>
                                              <li>
                                                <hr class="dropdown-divider">
                                              </li>
                                              <li><a class="dropdown-item text-danger waves-effect" href="javascript:void(0);">Leave Project</a></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-body">
                                      <div class="d-flex align-items-center flex-wrap">
                                        <div class="bg-lighter px-2 py-1 rounded-2 me-auto mb-3">
                                          <p class="mb-1"><span class="fw-medium text-heading">$24.8k</span> <span>/ $18.2k</span></p>
                                          <span class="text-body">Total Budget</span>
                                        </div>
                                        <div class="text-end mb-3">
                                          <p class="mb-1"><span class="text-heading fw-medium">Début: </span> <span>{{date('d/m/Y',strtotime($value->date_debut))}}</span></p>
                                          <p class="mb-1"><span class="text-heading fw-medium">Fin: </span> <span>{{date('d/m/Y',strtotime($value->date_fin))}}</span></p>
                                        </div>
                                      </div>
                                      <p class="mb-0">{{Str::limit($value->description, 200)}}</p>
                                    </div>
                                    <div class="card-body border-top">
                                      <div class="d-flex align-items-center mb-3">
                                        <p class="mb-1"><span class="text-heading fw-medium">Estimation de fin  </span> Estimation <span></span></p>

                                      </div>
                                      <div class="d-flex justify-content-between align-items-center mb-2">
                                        <small class="text-body">Tache: 50/1O0</small>
                                        <small class="text-body">95% Completed</small>
                                      </div>
                                      <div class="progress mb-3 rounded rounded" style="height: 8px;">
                                        <div class="progress-bar rounded" role="progressbar" style="width: 40%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0 zindex-2">
                                            @foreach ($value->specialites as $specialite)


                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                                                <i class="far fa-fw fa-file-word"></i>
                                            </li>
                                            @endforeach


                                          </ul>
                                        </div>
                                        <div class="ms-auto">
                                          <a href="javascript:void(0);" class="text-muted d-flex align-items-center"><i class="fa fa-eye mdi-24px me-2"></i></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            @endforeach
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row g-0 align-items-center mb-4">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- .card-->
            </div>


            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>


@endsection
