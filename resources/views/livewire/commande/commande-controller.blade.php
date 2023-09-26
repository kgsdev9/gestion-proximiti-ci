
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
                                <div class="col-md-6 col-lg-4 col-xxl-6">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label"> Selectionner le client @error('client_id')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                         <select wire:model="client_id" class="form-control @error('client_id')is-invalid @enderror ">
                                            <option value="">Selectionner un client </option>
                                            @foreach ($allClients as $client)
                                            <option value="{{$client->id}}">{{$client->nom}}</option>
                                            @endforeach

                                         </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-6">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Date d'expiration   @error('date_expiration')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                            <input type="date" class="form-control" wire:model="date_expiration" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-12">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label"> Selectionner un artisan    @error('artisan_id')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                           <select wire:model="artisan_id" class="form-control">
                                            <option value="">Mission à attribuer à </option>
                                                @foreach ($ressourceArtisans as $artisan)
                                                <option value="{{$artisan->id}}">{{$artisan->name}} {{$artisan->prenom}} -  Fonction:



                                                    @foreach ($artisan->specialites as  $specialite)
                                                            {{$specialite->libelle}}
                                                    @endforeach


                                                </option>
                                                @endforeach



                                           </select>
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
                    <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Supprimer</button>

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



              </div>
              <!-- /.card -->

              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="card-title mb-0 flex-grow-1">Liste des commandes</h4>
                            </div>
                            <div class="col-md-6">

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
                                        <th scope="col">CodeCommande</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Intervenant</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($allCommandes as $commande)


                                    <tr>
                                        <td>
                                            {{$commande->codeCommande}}
                                          </td>

                                          <td>
                                           {{$commande->client->nom}}   {{$commande->client->prenom}}
                                          </td>

                                          <td>
                                            {{$commande->client->adresse}}
                                          </td>

                                          <td>
                                            {{$commande->artisan->name}} {{$commande->artisan->prenom}}
                                          </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-1">
                                                </div>
                                                <div class="col-md-2">
                                                        <button class="btn btn-danger" onclick="confirm('Voulez-vous vraiment supprimer la commande  ?') || event.stopImmediatePropagation()" wire:click="delete({{$commande->id}})"><i class="fa fa-trash"></i></button>
                                                        <a href="{{route('detail.commande', $commande->id)}}"   class="btn btn-primary">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- end tr -->
                                    @endforeach
                                    </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>






</div>
