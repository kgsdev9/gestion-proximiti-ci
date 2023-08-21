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
                                    <h5>{{$ressource->name}}  {{$ressource->prenom}} </h5>

                                </div>

                             <div class="col-md-2">
                                    <img  src="{{public_path('artisans/photo/'.$ressource->photo)}}" alt="">
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




        </div>
    </div>


</div>
