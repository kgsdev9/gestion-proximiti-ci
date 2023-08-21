@extends('layout.app')

@section('content')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fiche de renseignement artisan  </h4>

                        </div>
                        <div class="card-body p-4">


                            <form action="{{route('artisan.store')}}" method="POST" enctype="multipart/form-data">

                                @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Nom de  l'artisan @error('name')
                                              <span class="text-danger">{{$message}}</span>

                                            @enderror </label>
                                            <input class="form-control" name="name" type="text"  value="{{old('name')}}" placeholder="Nom de l'artisan ">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-search-input" class="form-label">Prenom  @error('prenom')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="prenom" type="text" value="{{old('prenom')}}" placeholder="Prénom de l'artisan ">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Email  @error('email')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="email@gmail.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">commune  @error('commune')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="text" name="commune" value="{{old('commune')}}" placeholder="Treichville">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Zone intervention  @error('zone_intervention')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="text" name="zone_intervention" value="{{old('zone_intervention')}}" placeholder="Cocody deux plateaux">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Statut  de l'artisan  @error('status')
                                                <span class="text-danger">{{$message}}</span>
                                              @enderror</label>
                                          <select name="status" id="" class="form-control">
                                            <option value="Disponible">Disponible</option>
                                            <option value="Absent">Absent</option>
                                            <option value="maladie">Arret maladie</option>
                                            <option value="intervention">En intervention</option>
                                            <option value="radie">Radié</option>
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Photo de l'artisan @error('photo')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror </label>
                                            <input class="form-control" type="file" name="photo" >
                                        </div>



                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-3 mt-lg-0">
                                        <div class="mb-3">
                                            <label for="example-date-input" class="form-label">Télephone  @error('telephone')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror </label>
                                            <input class="form-control" type="tel" name="telephone"  value="{{old('telephone')}}" placeholder="0745645677">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-month-input" class="form-label">N° WhattSapp  @error('num_whattsap')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="tel" name="num_whattsap" value="{{old('num_whattsap')}}" placeholder="0745645677">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="adresse" type="text"  value="{{old('adresse')}}" placeholder="Adresse">
                                        </div>

                                        <div class="mb-3">

                                            <label for="example-week-input" class="form-label">Specialtite  @error('speciality_id')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <select id="specialite" class="form-control" name="speciality_id">
                                                <option value="">Choisir la spécialité de l'artisan</option>
                                                @foreach ($specialites as $value)
                                                <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Date d'adhésion  @error('date_adhesion')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="date_adhesion" type="date"  value="{{old('date_adhesion')}}" placeholder="15/23/2024">
                                        </div>


                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Description complementaire  @error('description')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                          <textarea name="description" id="" cols="30" rows="2" class="form-control">{{old('description')}}</textarea>
                                        </div>


                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Fiche d'adhesion @error('file')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror </label>
                                            <input class="form-control" type="file" name="file[]" multiple>
                                        </div>

                                    </div>

                                </div>


                            </div>

                            <br>
                            &nbsp; &nbsp; &nbsp; <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Enregistrer </button>
                            <a href="{{route('artisan.index')}}" class="btn btn-warning text-white"> <i class="fa fa-arrow-left"></i> Retourner</a>
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

