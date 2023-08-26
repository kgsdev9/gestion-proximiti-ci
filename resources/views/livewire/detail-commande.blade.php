@section('title', $commande->codeCommande)
<div>
    <div class="main-content">
        @include('livewire.commande.exempledetail')
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Detail bon de commande  </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detail</a></li>
                                    <li class="breadcrumb-item active">Bon de commande </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="mb-4">
                                                <img src="{{asset('logo_footer.png')}}" alt="" height="24"><span class="logo-txt">Proximiti</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="mb-4">
                                                <h4 class="float-end font-size-16">N°Commande {{$commande->codeCommande}}</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div>
                                            <p class="mb-1">RCCM : CI-ABJ-03-2022-B13-05599</p>
                                            <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i> SARLU au capital de 1.000.000 F CFA</p>
                                            <p><i class="mdi mdi-phone align-middle me-1"></i>Lieu : Riviera Bonoumin - Rond point ADO</p>
                                            <p><i class="mdi mdi-phone align-middle me-1"></i> Contact : +225 05 00 50 79 52</p>
                                            <p><i class="mdi mdi-phone align-middle me-1"></i>  E-mail : contact@proximiti.ci</p>
                                        </div>
                                    </div>




                                    <div class="col-sm-2">
                                        <div>
                                            <div>
                                                <h5 class="font-size-15">CodeCommande: {{$commande->codeCommande}}</h5>
                                                <p>Date  {{$commande->created_at}}</p>
                                            </div>

                                            <div class="mt-4">
                                                <h5 class="font-size-15">Expiration :</h5>
                                                <p class="mb-1"> {{$commande->expired_at}}</p>
                                                <p>Code client  {{$commande->code_client}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-2 mt-3">
                                    <h5 class="font-size-15">Sommaire du bon d'achat</h5>
                                </div>
                                <div class="p-4 border rounded">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th >Désignation</th>
                                                    <th>Quantite</th>
                                                    <th>Prix</th>
                                                    <th >TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $value)
                                                <tr>
                                                    <td>
                                                      {{$value->designation}}
                                                    </td>
                                                    <td>{{$value->quantite}} FCFA</td>
                                                    <td>{{$value->prix}}</td>
                                                    <td>{{$value->total}}</td>
                                                </tr>
                                                @endforeach


                                                <div class="row">
                                                    <div class="col-md-8">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <tr>
                                                            <th scope="row" colspan="2" class="border-0 text-end">Total</th>
                                                            <td class="border-0 text-end"><h4 class="m-0"></h4>   {{ $value->sommeCommande($data)}} FCFA</td>
                                                        </tr>
                                                    </div>

                                                </div>
                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                                <div class="d-print-none mt-3">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="show({{ $commande->id }})">
                                            <i class="fa fa-print"></i>
                                          </button>
                                        <a href="{{route('invoice.order', $commande->id)}}" class="btn btn-primary w-md waves-effect waves-light">Télecharger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>








</div>
