@extends('admin.layouts.app')
@section('title', 'Edition fournisseur')
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
                <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Désignation @error('designation')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="designation" type="text"  value="{{old('designation') ?? $ressource->designation}}" placeholder="Désignation" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Prix @error('prix')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="prix" type="number"  value="{{old('prix') ?? $ressource->prix}}" placeholder="123444" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-search-input" class="form-label">Adresse  @error('adresse')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" name="adresse" type="text" value="{{old('adresse') ?? $ressource->adresse}}" placeholder="Adresse fournisseur" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Commune  @error('commune')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="commune" value="{{old('commune') ?? $ressource->commune}}" placeholder="Abobo-Dokui">
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label">Télephone  @error('telephone')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" type="tel" name="telephone"  value="{{old('telephone') ?? $ressource->telephone}}" placeholder="0745645677" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-month-input" class="form-label">Fixe  @error('fax')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" type="tel" name="fax" value="{{old('fax') ?? $ressource->fixe}}" placeholder="0745645677" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label">email  @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                      <input class="form-control" name="email" type="email"  value="{{old('email') ?? $ressource->email}}" placeholder="Adresse" required>
                                </div>
                            </div>




                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Modifier </button>
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
