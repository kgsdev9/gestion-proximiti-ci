@extends('admin.layouts.app')
@section('title', 'Formulaire artisan')
@section('master')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulaire de renseignement artisan   </h4>
                        </div>
                        <div class="card-header">
                            <form action="{{route('artisan.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-inner">
                                    <div class="row gy-4">
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-label">Nom de  l'artisan @error('name')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror </label>
                                                  <input class="form-control" name="name" type="text"  value="{{old('name')}}" placeholder="Nom de l'artisan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-label">Prenom  @error('prenom')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <input class="form-control" name="prenom" type="text" value="{{old('prenom')}}" placeholder="Prénom de l'artisan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-week-input" class="form-label">Statut  de l'artisan  @error('status')
                                                    <span class="text-danger">{{$message}}</span>
                                                  @enderror</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-control"  name="status" required>
                                                        <option value="Disponible">Disponible</option>
                                                        <option value="Absent">Absent</option>
                                                        <option value="maladie">Arret maladie</option>
                                                        <option value="intervention">En intervention</option>
                                                        <option value="radie">Radié</option>
                                                      </select>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-date-input" class="form-label">Télephone  @error('telephone')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror </label>
                                                  <input class="form-control" type="tel" name="telephone"  value="{{old('telephone')}}" placeholder="0745645677" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-month-input" class="form-label">N° WhattSapp  @error('num_whattsap')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <input class="form-control" type="tel" name="num_whattsap" value="{{old('num_whattsap')}}" placeholder="0745645677" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <input class="form-control" name="adresse" type="text"  value="{{old('adresse')}}" placeholder="Adresse" required>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-week-input" class="form-label">Specialtite  @error('speciality_id')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <select id="specialite" class="form-control" name="speciality_id" required>
                                                    <option value="">Choisir la spécialité de l'artisan</option>
                                                    @foreach ($allSpecialites as $value)
                                                    <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label for="example-week-input" class="form-label">Date d'adhésion  @error('date_adhesion')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <input class="form-control" name="date_adhesion" type="date"  value="{{old('date_adhesion')}}" placeholder="15/23/2024" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label">Photo de l'artisan  @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror </label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input class="form-control" type="file" name="photo" required >

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="total-person">Fiche d'adhesion + piece d'identité @error('file')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                                <input class="form-control" type="file" name="file[]" multiple required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="total-person">Commune @error('commune')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                                <input class="form-control" type="text" name="commune" value="{{old('commune')}}" placeholder="Treichville" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="default-textarea">Commentaire @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                                <div class="form-control-wrap">
                                                    <textarea name="description" id="" cols="30" rows="1" class="form-control">{{old('description') ?? 'decrivez un peu artisan '}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Enregistrer l'artisan </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
@endsection

