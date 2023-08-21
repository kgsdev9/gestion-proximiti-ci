@extends('admin.layouts.app')

@section('title', 'Nouvel artisan')

@section('master')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edition de {{$ressource->name}}  </h4>

                        </div>
                        <div class="card-body p-4">
                            <form action="{{route('artisan.update', $ressource->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                            <div class="row">

                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Nom de  l'artisan @error('name')
                                              <span class="text-danger">{{$message}}</span>

                                            @enderror </label>
                                            <input class="form-control" name="name" type="text"  value="{{$ressource->name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-search-input" class="form-label">Prenom  @error('prenom')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="prenom" type="text" value="{{$ressource->prenom}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Email  @error('email')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="email" name="email" value="{{$ressource->email}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">commune  @error('commune')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="text" name="commune" value="{{$ressource->commune}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Zone intervention  @error('zone_intervention')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="text" name="zone_intervention" value="{{$ressource->zone_intervention}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-email-input" class="form-label">Photo de l'artisan </label>
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
                                            <input class="form-control" type="tel" name="telephone"  value="{{$ressource->telephone}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-month-input" class="form-label">N° WhattSapp  @error('num_whattsap')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" type="tel" name="num_whattsap" value="{{$ressource->num_whattsapp}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="adresse" type="text"  value="{{$ressource->adresse}}">
                                        </div>

                                        <div class="mb-3">

                                            <label for="example-week-input" class="form-label">Specialtite  @error('speciality_id')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                              <select name="speciality_id"  class="form-control">
                                                @foreach ($specialites as $value)
                                                <option value="{{$value->id}}" {{$value->id ==$ressource->speciality_id ? 'selected': ''}}>{{$value->libelle }}</option>
                                                @endforeach

                                              </select>

                                        </div>

                                        <div class="mb-3">

                                            <label for="example-week-input" class="form-label">Specialtite  @error('speciality_id')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                              <select name="statut"  class="form-control">
                                                <option value="Disponible" {{($ressource->status === 'Disponible') ? 'selected' : ''}}>Disponible</option>
                                                <option value="Absent" {{($ressource->status === 'Absent') ? 'selected' : ''}}>Absent</option>
                                                <option value="maladie" {{($ressource->status === 'maladie') ? 'selected' : ''}}>Maladie</option>
                                                <option value="intervention" {{($ressource->status === 'intervention') ? 'selected' : ''}}>En intervention</option>
                                                <option value="radie" {{($ressource->status === 'radie') ? 'selected' : ''}}>Radié</option>

                                              </select>

                                        </div>

                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Date d'adhésion  @error('date_adhesion')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="date_adhesion" type="date"  value="{{$ressource->date_adhesion}}">
                                        </div>


                                        <div class="mb-3">
                                            <label for="example-week-input" class="form-label">Description complementaire  @error('description')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                          <textarea name="description" id="" cols="30" rows="2" class="form-control">{{$ressource->description}}</textarea>
                                        </div>




                                    </div>

                                </div>

                                      &nbsp; &nbsp; &nbsp; <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Enregistrer les modifications</button>

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

@section('javascript')

<script>
    $("#specialite").select2({
    placeholder: "Select a specialite",
    allowClear: true
});
</script>
@endsection
