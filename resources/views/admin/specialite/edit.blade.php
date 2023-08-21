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
                            <h4 class="card-title">Edition  specialité  </h4>

                        </div>
                        <div class="card-body p-4">


                            <form action="{{route('specialite.update', $ressource->id)}}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('PATCH')


                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Libelé de la spécialité  @error('libelle')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="libelle" type="text" value="{{$ressource->libelle}}" >

                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Description  @error('description')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                          <textarea name="description" id="" cols="2" rows="10" class="form-control"> {{$ressource->description}}</textarea>

                                    </div>
                                </div>




                                <br><br><br>
                                      &nbsp; &nbsp; &nbsp; <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Enregistrer</button>


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

