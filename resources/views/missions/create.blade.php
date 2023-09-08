@extends('admin.layouts.app')
@section('title', ' Nouvelle Mission')
@section('master')


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
                <form action="{{route('missions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label"> Libellé de la mission @error('designation')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="text" type="text"  required value="teste mission">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Type de mission @error('prix')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror </label>
                                      <select class="select2-multiple form-control" name="specialite_id[]" multiple="multiple" id="select2Multiple" required>
                                        @foreach ($specialites as $value)
                                        <option value="{{$value->id}}">{{$value->libelle}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-search-input" class="form-label">Date de debut  @error('date_debut')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" name="date_debut" type="date" value="{{old('date_debut')}}" value="{{old('date_debut')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Date de fin   @error('date_fin')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" name="date_fin" type="date" value="{{old('date_fin')}}" value="{{old('date_fin')}}" required>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label">Artisan  @error('artisan_id')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                    <select name="artisan_id" id="" class="form-control">
                                        @foreach ($allArtisans as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-month-input" class="form-label">Clients  @error('client_id')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                     <select name="client_id" id="" class="form-control">
                                        @foreach ($AllSuplliers as $value)
                                        <option value="{{$value->id}}">{{$value->nom}}</option>
                                        @endforeach

                                     </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label">Status  @error('status')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                        <select name="status" id="" class="form-control" required>
                                            <option value="En attente">En Attente</option>
                                            <option value="Términe">Términé</option>
                                            <option value="Suspendu">Suspendu</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Type   @error('type')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                        <select name="type" id="" class="form-control" required>
                                            <option value="devis">Dévis</option>
                                            <option value="facture">Facture</option>
                                        </select>
                                </div>
                            </div>



                            <div class="col-md-6 col-lg-4 col-xxl-12">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Description    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                       <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enregistrer la mission </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-header -->

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



@endsection
