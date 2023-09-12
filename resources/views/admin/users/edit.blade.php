@extends('admin.layouts.app')

@section('title', 'Edition de l\'tulisateur')

@section('master')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Edition de l'utilisateur </h4>

                        </div>
                        <div class="card-body p-4">


                            <form action="{{route('users.update', $singleUser->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="col-lg-12">
                                    <div>
                                            <label for="example-search-input" class="form-label">Nom d'utilisateur  @error('name')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="name" type="text" value="{{$singleUser->name}}"  required>

                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Adresse E-mail   @error('email')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="email" type="email" value="{{$singleUser->email}}"   required>

                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Roles    @error('role_id')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <select name="role_id"  required class="form-control">
                                                <option value="">Attribuer un role  </option>
                                                @foreach ($allRoles as $value)
                                                <option value="{{$value->id}}" {{$value->id == $singleUser->role_id ? 'selected': ''}}>{{$value->name }}</option>
                                                @endforeach
                                            </select>

                                    </div>
                                </div>


                                <br>

                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Mot de passe   @error('password')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="password" type="password"  required value="{{$singleUser->password}}">

                                    </div>
                                </div>


                                <br>
                                <div class="col-lg-12">
                                    <div>


                                            <label for="example-search-input" class="form-label">Confirmer le mot de passe    @error('password_confirmation')
                                                <span class="text-danger">{{$message}}</span>

                                              @enderror</label>
                                            <input class="form-control" name="password_confirmation" type="password"  value="{{$singleUser->password}}">

                                    </div>
                                </div>




                                <br><br><br>
                                      &nbsp; &nbsp; &nbsp; <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Enregistrer les modifications</button>


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

