@extends('admin.layouts.app')

@section('title', 'Fiche technique')
@section('master')

<div class="main-content">

    <div class="page-content">
        <div class="container">

                <div class="col-md-12">
                  <div class="row" >
                    <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-8">
                                    <h2> <strong>FICHE TECHNIQUE DE L'ARTISAN</strong> </h2>
                                    @if($ressource->status =="Disponible")
                                    <button class="btn btn-success w-md"></button>
                                     @elseif($ressource->status =="Absent")
                                    <button class="btn btn-warning w-md"></button>
                                     @elseif($ressource->status =="maladie")
                                     <button class="btn btn-danger w-md"></button>
                                     @elseif($ressource->status =="intervention")
                                     <button class="btn btn-info w-md"></button>
                                     @elseif($ressource->status =="radie")
                                     <button class="btn btn-danger w-md"></button>
                                     @endif
                                    <h5>{{$ressource->name}}  {{$ressource->prenom}} </h5>
                                    <a href="{{route('invoice.fiche', $ressource->id)}}" class="btn btn-primary">Télecharger</a>
                                </div>

                                <div class="col-md-2">
                                    <img class="rounded-circle" src="{{asset('artisans/photo/'.$ressource->photo)}}" alt="" style="height:130px;">
                                </div>

                            </div>
                          <div class="table-responsive pt-3">
                            <table class="table table-striped" id="example">

                           <tbody>

                            <tr>
                                <td>
                               Nom Prenom
                                </td>
                                <td>
                                    {{$ressource->name}}     {{$ressource->prenom}}
                                </td>

                            </tr>

                              <tr>
                                <td>
                                Télephone
                                </td>
                                <td>
                             {{$ressource->telephone}}
                                </td>
                              </tr>


                              <tr>
                                  <td>
                                    Whattsapp
                                  </td>
                                  <td>
                                    {{$ressource->num_whattsapp}}
                                  </td>

                              </tr>

                              <tr>
                                  <td>
                               Adresse
                                  </td>
                                  <td>
                                    {{$ressource->adresse}}
                                  </td>


                              </tr>
                              <tr>
                                  <td>
                                    Email
                                  </td>
                                  <td>
                                    {{$ressource->email  }}
                                  </td>
                              </tr>

                              <tr>
                                <td>
                                 Commune
                                </td>
                                <td>
                                  {{$ressource->commune  }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                 Zone intervention
                                </td>
                                <td>
                                  {{$ressource->zone_intervention  }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                Description
                                </td>
                                <td>
                                  {{$ressource->description  }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                Date d'adhesion
                                </td>
                                <td>
                                  {{$ressource->date_adhesion  }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                               Spécialité metier
                                </td>
                                <td>
                                  {{$ressource->specilaite->libelle  }}
                                </td>
                            </tr>
                            </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
@endsection
