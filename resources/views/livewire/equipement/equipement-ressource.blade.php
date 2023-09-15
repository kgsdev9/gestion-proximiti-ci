
@section('title', 'Catalogue equipement')

<div class="main-content">
@include('livewire.equipement.modals.create')
@include('livewire.equipement.modals.edit')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Annuire Equipement</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Equipement</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <br>
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="card-title mb-0 flex-grow-1">Liste des équipements</h4>
                            </div>

                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EquipementcreateModal">
                                  <i class="fa fa-add"></i>
                                  </button>

                                  <a href="{{route('equipment.download')}}" class="btn btn-warning" >
                                    <i class="fas fa-file-pdf"></i>
                                  </a>

                                  <a href="{{route('equipment.excell')}}" class="btn btn-success" >
                                    <i class="fas fa-file-excel"></i>
                                  </a>
                            </div>

                            <div class="col-md-2">
                               <input type="search" wire:model="search" class="form-control form-control-sm" placeholder="Rechercher...">
                            </div>


                            </div>

                        </div>


                        <div class="flex-shrink-0">

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                <thead class="text-muted table-light">
                                    <tr>
                                        <th scope="col">Désignation</th>
                                        <th scope="col">Quantite</th>
                                        <th scope="col">fournisseur</th>
                                        <th scope="col">prix</th>
                                        <th scope="col">Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allEquipments as $value)


                                    <tr>
                                        <td>
                                            {{$value->designation}}
                                          </td>

                                          <td>
                                            {{$value->quantite}}
                                          </td>

                                          <td>
                                            {{$value->fournisseur}}
                                          </td>
                                          <td>
                                            {{$value->price}}FCFA
                                          </td>
                                          <td>
                                            {{$value->description}}
                                          </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-1">
                                                </div>
                                                <div class="col-md-2">
                                                        <button class="btn btn-danger" onclick="confirm('Voulez-vous vraiment l\'equipment ?') || event.stopImmediatePropagation()" wire:click="delete({{$value->id}})"><i class="fa fa-trash"></i></button>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#EquipementeditModal" wire:click="editEquipment({{$value->id}})" class="btn btn-primary">
                                                            <i class="fa fa-edit"></i>
                                                            </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- end tr -->
                                    @endforeach
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div>
                    </div>
                </div> <!-- .card-->
            </div>


            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>



