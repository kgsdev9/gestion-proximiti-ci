@extends('admin.layouts.app')
@section('title', 'Edition du client')
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
                <form action="{{route('clients.update', $ressourceClient->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Nom  @error('nom')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="nom" type="text"  value="{{old('nom') ?? $ressourceClient->nom}}" placeholder="Stephane" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Prénom @error('prenom')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="prenom" type="text"  value="{{old('prenom') ?? $ressourceClient->prenom}}" placeholder="kgs" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-search-input" class="form-label">Email @error('email')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" name="email" type="email" value="{{old('email') ?? $ressourceClient->email}}" placeholder="kgsdev8@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label"> Télephone @error('telephone')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="telephone" value="{{old('telephone') ?? $ressourceClient->telephone}}"  placeholder="0768365866" >
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
                                    <option value="facebook" {{($ressourceClient->mode_contact === 'facebook') ? 'selected' : ''}}>Facebook</option>
                                    <option value="instagram" {{( $ressourceClient->mode_contact === 'instagram') ? 'selected' : ''}}>Instagram</option>
                                    <option value="appel" {{($ressourceClient->mode_contact === 'appel') ? 'selected' : ''}}>Appel</option>
                                    <option value="whatsApp" {{($ressourceClient->mode_contact === 'whatsApp') ? 'selected' : ''}}>Whattsapp</option>
                                    <option value="site" {{($ressourceClient->mode_contact === 'site') ? 'selected' : ''}}>Site Web </option>
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-month-input" class="form-label">Date  @error('date_contact')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror</label>
                                      <input class="form-control" type="date" name="date_contact" value="{{old('date_contact')?? $ressourceClient->date_contact }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror</label>
                                      <input class="form-control" name="adresse" type="text"  value="{{old('adresse') ?? $ressourceClient->adresse}}" placeholder="Adresse" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-check form-switch">
                                    <br><br>
                                    <label class="form-check-label" for="flexSwitchCheckDefault" >Premium </label>
                                         <input class="form-check-input" name="premimum" type="checkbox" id="flexSwitchCheckDefault" value="oui"  {{$ressourceClient->premimum=="oui"? 'checked':'' }}>
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
