
@section('title', 'Annuaire des commandes')
<div>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

        <!-- Main content -->
        <section class="content" style="margin-top:-5px;">
          <div class="row">
            <div class="col-12">
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
              <div class="card">
                <div class="card-header">
                    <form wire:submit.prevent="store">
                        @csrf

                        <div class="card-inner">
                            <div class="row gy-4">

                                <div>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label"> Nom & Prénom du client  @error('fullname')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                          <input class="form-control" type="tel" wire:model="fullname"  placeholder="Guy Stephane" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Télephone du client  @error('telephone_client')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control"  type="text" wire:model="telephone_client"  placeholder="+225075834656" required>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Adresse d'intervention   @error('adresse_intervention')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                            <input type="text" class="form-control" wire:model="adresse_intervention" placeholder="Riviera rond point Ado" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Date d'expiration   @error('date_expiration')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                            <input type="date" class="form-control" wire:model="date_expiration" required>
                                    </div>
                                </div>




                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-label">Désignation @error('designation')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                          <input class="form-control"  wire:model="designation.0" type="text" placeholder="Ordinateur portable"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-search-input" class="form-label">Prix  @error('prix')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control" wire:model="prix.0" type="number" placeholder="9000" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Quantité  @error('status')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control" wire:model="quantite.0" type="number"  placeholder="2" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-2 col-lg-2 col-xxl-1">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Action</label>
                                          <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Ajouter</button>

                                    </div>
                                </div>
                                @foreach($inputs as $key => $value)

                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-label">Désignation @error('designation')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                          <input class="form-control"  wire:model="designation.{{ $value }}"  type="text" placeholder="Ordinateur portable"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-search-input" class="form-label">Prix  @error('prix')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control" wire:model="prix.{{ $value }}" type="number"  placeholder="9000" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Quantité  @error('quantite')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control"  wire:model="quantite.{{ $value }}"  type="number"  placeholder="2" required>
                                        </div>
                                    </div>
                                </div>



            <div class="col-md-2 col-lg-2 col-xxl-1">
                <div class="form-group">
                    <label for="example-week-input" class="form-label">Action</label>
                    <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>

                </div>
            </div>


        @endforeach

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enregistrer le bon d'achat </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table align-middle datatable dt-responsive table-check nowrap dataTable no-footer" style="border-collapse: collapse; border-spacing: 0px 8px; width: 100%;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr class="bg-transparent">

                                    <th style="width: 67px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Invoice ID: activate to sort column ascending">
                                        CodeCommande
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 63px;">
                                     Client
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Billing Name: activate to sort column ascending" style="width: 91px;">
                                       Télephone
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 53px;">
                                        Adresse d'intervention
                                    </th>
                                    <th style="width: 44px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($commandeRessource as $value)


                                <tr class="odd">

                                    <td>
                                        <a href="javascript: void(0);" class="text-body fw-medium">{{$value->codeCommande}}</a>
                                    </td>


                                    <td class="">
                                        {{$value->fullname}}
                                    </td>
                                    <td>
                                        {{$value->telephone_client}}
                                    </td>

                                    <td>
                                        {{$value->adresse_intervention}}
                                    </td>


                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                      <li><a href="{{route('detail.commande', $value->id)}}" class="btn btn-primary">Consulter</a></li>
                                                    </div>

                                                    <div class="col-md-6">
                                                      <li><button  wire:click="delete({{$value->id}})" onclick="confirm('Voulez-vous vraiment supprimer l\'utilisateur de ce groupe ?') || event.stopImmediatePropagation()">Supprimer</button></li>
                                                    </div>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach





                            </tbody>
                        </table>
                    </div>
                </div>


              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>






</div>
