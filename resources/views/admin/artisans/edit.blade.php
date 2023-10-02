@extends('admin.layouts.app')

@section('title', 'Edition de l\'artisan')

@section('master')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edition de {{$singleRessource->name}}  </h4>

                            </div>

                            <div class="card-body p-4">
                                <form action="{{route('artisan.update', $singleRessource->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Nom de  l'artisan @error('name')
                                                  <span class="text-danger">{{$message}}</span>

                                                @enderror </label>
                                                <input class="form-control" name="name" type="text"  value="{{$singleRessource->name}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-search-input" class="form-label">Prenom  @error('prenom')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" name="prenom" type="text" value="{{$singleRessource->prenom}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-email-input" class="form-label">Email  @error('email')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" type="email" name="email" value="{{$singleRessource->email}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-email-input" class="form-label">commune  @error('commune')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" type="text" name="commune" value="{{$singleRessource->commune}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-email-input" class="form-label">Zone intervention  @error('zone_intervention')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" type="text" name="zone_intervention" value="{{$singleRessource->zone_intervention}}">
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
                                                <input class="form-control" type="tel" name="telephone"  value="{{$singleRessource->telephone}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-month-input" class="form-label">N° WhattSapp  @error('num_whattsap')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" type="tel" name="num_whattsap" value="{{$singleRessource->num_whattsapp}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-week-input" class="form-label">Adresse  @error('adresse')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" name="adresse" type="text"  value="{{$singleRessource->adresse}}">
                                            </div>

                                            <div class="mb-3">

                                                <label for="example-week-input" class="form-label">Specialtite  @error('speciality_id')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <select class="specialite form-control" name="speciality_id[]" id="specialite" multiple="multiple"  required>

                                                    @foreach ($allSpecialites as $value)
                                                        <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                       @endforeach
                                                </select>


                                            @php
                                                $specialites_id = [];
                                            @endphp

                                            @foreach ($singleRessource->specialites as  $specialite)
                                                    @php
                                                        array_push($specialites_id, $specialite->id)
                                                    @endphp
                                            @endforeach
                                            </div>

                                            <div class="mb-3">

                                                <label for="example-week-input" class="form-label">Status  @error('status')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                  <select name="statut"  class="form-control">
                                                    <option value="Disponible" {{($singleRessource->status === 'Disponible') ? 'selected' : ''}}>Disponible</option>
                                                    <option value="Absent" {{($singleRessource->status === 'Absent') ? 'selected' : ''}}>Absent</option>
                                                    <option value="maladie" {{($singleRessource->status === 'maladie') ? 'selected' : ''}}>Maladie</option>
                                                    <option value="intervention" {{($singleRessource->status === 'intervention') ? 'selected' : ''}}>En intervention</option>
                                                    <option value="radie" {{($singleRessource->status === 'radie') ? 'selected' : ''}}>Radié</option>

                                                  </select>

                                            </div>

                                            <div class="mb-3">
                                                <label for="example-week-input" class="form-label">Date d'adhésion  @error('date_adhesion')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                                <input class="form-control" name="date_adhesion" type="date"  value="{{$singleRessource->date_adhesion}}">
                                            </div>


                                            <div class="mb-3">
                                                <label for="example-week-input" class="form-label">Description complementaire  @error('description')
                                                    <span class="text-danger">{{$message}}</span>

                                                  @enderror</label>
                                              <textarea name="description" id="" cols="30" rows="2" class="form-control">{{$singleRessource->description}}</textarea>
                                            </div>



                                        </div>
                                        <label for="">Modifier les fichiers</label>
                                        <input t*ype="file" type="file" name="file[]" multiple>

                                    </div>

                                          &nbsp; &nbsp; &nbsp; <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Enregistrer les modifications</button>

                                </div>
                            </form>
                            </div>





                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                @foreach ($singleRessource->medias as $value)
                <div class="col-lg-4">
                    <form action="{{route('unique.files', $value->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">SUpprimer

                        </button>
                    <div class="card border-primary text-white-50">
                        <div class="card-body">
                         <iframe src="{{asset('programme/'.$value->image)}}" frameborder="0"></iframe>
                        </div>
                    </div>
                </div><!-- end col -->

                @endforeach



            </div>



        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

    $(document).ready(function() {
    $('.specialite').select2();
    data = [];
    data = <?php echo json_encode($specialites_id); ?>;
    $('.specialite').val(data);
    $('.specialite').trigger('change');
     });
     

</script>


@endsection


