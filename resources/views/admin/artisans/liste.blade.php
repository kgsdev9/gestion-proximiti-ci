@extends('admin.layouts.app')


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
                                        @foreach ($specialites as $value)
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
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">

                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter">

                               <a href="{{route('artisan.export')}}"  class="btn btn-success">Excelle</a>

                               <a href="{{route('artisan.pdf')}}" class="btn btn-warning">PDF</a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                <table id="myTable" class="table table-condensed">
                <thead class="thead-dark">
                <tr role="row">
                    <th>Nom et prénom</th>
                    <th>Télephone</th>
                    <th>Commune</th>
                    <th>Spécialité</th>
                    <th style="width:20px;">Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($artisans as $value)
                <tr role="row">
                  <td >{{$value->name}} {{$value->prenom}}</td>
                  <td>{{$value->telephone}}</td>
                  <td>{{$value->commune}}</td>
                  <td>  {{$value->specilaite->libelle}}</td>



                  <td>
                    <span class="badge bg-success">Disponible</span>
                </td>
                <td>

                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{route('artisan.edit', $value->id)}}" class="btn btn-primary text-white"> <i class="fa fa-edit"></i></a>
                        </div>

                        <div class="col-md-2">
                            <form action="{{route('artisan.destroy', $value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer?')"><i class="fa fa-trash"></i></button>
                             </form>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('artisan.show', $value->id)}}" class="btn btn-success text-white"> <i class="fa fa-eye"></i></a>
                        </div>
                    </div>



                </td>
                </tr>
              @endforeach
               </tbody>

              </table>
            </div>
        </div>
        </div>
            </div>
            <!-- /.card-body -->
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
