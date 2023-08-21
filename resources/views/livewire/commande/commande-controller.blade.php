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
                    <form wire:submit.prevent="save">
                        @csrf
                        <h5>Bon de commande  </h5>
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-label">Désignation @error('designation')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                          <input class="form-control" wire:model="designation" type="text" placeholder="Ordinateur portable"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-search-input" class="form-label">Prix  @error('prix')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control" wire:model="prix" type="number" value="{{old('prix')}}" placeholder="Prénom de l'artisan" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Quantité  @error('status')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control" wire:model="quantite" type="number"  placeholder="2" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Total  @error('amount')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control"  value="{{$prix * $quantite}}" type="number" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label">Télephone  @error('telephone')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror </label>
                                          <input class="form-control" type="tel" wire:model="telephone"  placeholder="0745645677" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-month-input" class="form-label">Email  @error('email')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control" type="email" wire:model="email"   placeholder="kgsdev8@gmail.com" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Nom fournisseur  @error('date_adhesion')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control" wire:model="nomfournisseur" type="text"  value="{{old('date_adhesion')}}" placeholder="15/23/2024" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Adresse  Fournisseur @error('adresse')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                          <input class="form-control"  type="text" wire:model="addresfournisseur"  placeholder="Adresse" required>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label for="example-week-input" class="form-label">Priorité du bon   @error('date_adhesion')
                                            <span class="text-danger">{{$message}}</span>

                                          @enderror</label>
                                            <select wire:model="status"  class="form-control">
                                                <option value="haute">Haute</option>
                                                <option value="base">Base</option>
                                                <option value="moyenne">Moyennne</option>
                                            </select>
                                    </div>
                                </div>



                                <div class="col-md-12 col-lg-8 col-xxl-6">
                                    <div class="form-group">
                                        <label class="form-label">Déscription  @error('description')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror </label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                              <textarea  wire:model="description" class="form-control" id="" cols="30" rows="2"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enregistrer le bon d'achat </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                @include('livewire.update-commande')
                @include('livewire.commande.commandread')
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table align-middle datatable dt-responsive table-check nowrap dataTable no-footer" style="border-collapse: collapse; border-spacing: 0px 8px; width: 100%;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 24px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 67px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Invoice ID: activate to sort column ascending">
                                        Invoice ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 63px;">
                                        Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Billing Name: activate to sort column ascending" style="width: 91px;">
                                        Billing Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 53px;">
                                        Amount
                                    </th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" aria-sort="descending" style="width: 43px;">
                                        Status
                                    </th>
                                    <th style="width: 94px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Download Pdf: activate to sort column ascending">
                                        Download Pdf
                                    </th>
                                    <th style="width: 44px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($commandeRessource as $value)


                                <tr class="odd">
                                    <td class="">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-labe12"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript: void(0);" class="text-body fw-medium">{{$value->codeCommande}}</a>
                                    </td>
                                    <td>
                                        {{$value->designation}}
                                    </td>
                                    <td class="">
                                        {{$value->description}}
                                    </td>
                                    <td class="">
                                        {{$value->total}} FCFA
                                    </td>
                                    <td>
                                        {{$value->telephone}}
                                    </td>
                                    <td class="sorting_1">
                                        @if($value->status == "base")
                                        <div class="badge badge-soft-warning font-size-12">
                                            Base
                                        </div>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-end">

                                                <li>
                                                    <button  data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edition</button>
                                                </li>
                                                <li>
                                                    <button  data-bs-toggle="modal" data-bs-target="#showModal" wire:click="show({{ $value->id }})" class="btn btn-primary btn-sm">Consulter</button>
                                                    <a class="dropdown-item" href="#">Consulter</a></li>
                                                <li>
                                                 <button  wire:click="delete({{$value->id}})" onclick="confirm('Voulez-vous vraiment supprimer l\'utilisateur de ce groupe ?') || event.stopImmediatePropagation()">Supprimer</button>

                                                </li>
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
