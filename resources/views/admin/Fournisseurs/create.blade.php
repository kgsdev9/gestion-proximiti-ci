@extends('admin.layouts.app')
@section('title', 'Nouveau fournisseur')
@section('content')

 {{-- <div class="card-header">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-label">Nom de  l'artisan @error('name')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" name="name" type="text"  value="{{Request::get('name')}}" placeholder="Nom de l'artisan" required>
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
                                    <label for="example-date-input" class="form-label">Télephone  @error('telephone')
                                        <span class="text-danger">{{$message}}</span>

                                      @enderror </label>
                                      <input class="form-control" type="tel" name="telephone"  value="{{old('telephone')}}" placeholder="0745645677" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label" for="default-textarea">Commentaire @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror</label>
                                    <div class="form-control-wrap">
                                        <button type="submit" class="btn btn-primary">Rechercher </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div> --}}

@endsection
