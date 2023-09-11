@extends('admin.layouts.app')
@section('title', 'Nouveau client')
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
                <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Nom  @error('nom')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="nom" type="text"  value="{{old('nom')}}" placeholder="Désignation" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Prénom @error('prenom')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="prenom" type="text"  value="{{old('prenom')}}" placeholder="123444" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-search-input" class="form-label">adresse  @error('adresse')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" name="adresse" type="adresse" value="{{old('adresse')}}" placeholder="adresse fournisseur" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Code Client  @error('code_client')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="code_client" value="{{old('code_client')}}" placeholder="PR5567678">
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label">Mode Contact  @error('telephone')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                   <select name="mode_contact" id="" class="form-control">
                                    <option value="facebook">Facebook</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="appel">Appel Télephonique</option>
                                    <option value="whatsApp">WhatsApp</option>
                                    <option value="site">Site Web </option>
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-month-input" class="form-label">Date  @error('mode_contact')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" type="date" name="mode_contact" value="{{old('mode_contact')}}" placeholder="0745645677" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                      <input class="form-control" name="adresse" type="adresse"  value="{{old('adresse')}}" placeholder="adresse" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-check form-switch">
                                    <br><br>
                                    <label class="form-check-label" for="flexSwitchCheckDefault" >Premium </label>
                                <input class="form-check-input" name="premimum" type="checkbox" id="flexSwitchCheckDefault" value="oui">

                                  </div>
                            </div>



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enregistrer </button>
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
