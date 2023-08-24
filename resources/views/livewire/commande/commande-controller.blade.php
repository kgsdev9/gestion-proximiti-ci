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
                        <h5>Bon de commande  </h5>
                        <div class="card-inner">
                            <div class="row gy-4">


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


                                <div class=" add-input">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Macbook pro 2015" wire:model="name.0">
                                                @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="number" class="form-control" wire:model="email.0" placeholder="15000">
                                                @error('email.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>



                                        <div class="col-md-2">
                                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Ajouter</button>
                                        </div>
                                    </div>
                                </div>

                                @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" wire:model="name.{{ $value }}">
                            @error('name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="number" class="form-control" wire:model="email.{{ $value }}" placeholder="kfgs@gmail.com">
                            @error('email.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
                    </div>
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
                

                {{-- @include('livewire.update-commande')
                @include('livewire.commande.commandread') --}}


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
