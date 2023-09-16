@extends('admin.layouts.app')

@section('title', 'Annuaire des artisans')
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
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-md-4">
                            <div >
                             <a href="{{route('artisan.create')}}" class="btn btn-primary">Nouvel artisan </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">
                            <div >
                               <a href="{{route('artisan.export')}}"  class="btn btn-success">Excelle</a>
                               <a href="{{route('artisan.pdf')}}" class="btn btn-warning">PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                <table id="myTable" class="table table-condensed">
                <thead class="text-muted table-light">
                <tr role="row">
                    <th>Nom et prénom</th>
                    <th>Télephone</th>
                    <th>Commune</th>
                    <th>Spécialité</th>
                    <th>Date d'ajout</th>
                    <th style="width:20px;">Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($allArtisans as $value)
                <tr role="row">
                  <td >{{$value->name}} {{$value->prenom}}</td>
                  <td>{{$value->telephone}}</td>
                  <td>{{$value->commune}}</td>
                  <td> {{$value->specilaite->libelle}}</td>
                  <td> {{$value->created_at->diffForHumans()}}</td>
                  <td>
                    <span class="badge bg-success">Disponible</span>
                </td>
                <td>

                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{route('artisan.edit', $value->id)}}" class="btn btn-primary text-white"> <i class="fa fa-edit"></i></a>
                        </div>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-2">
                            <form action="{{route('artisan.destroy', $value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer?')"><i class="fa fa-trash"></i></button>
                             </form>
                        </div>
                        <div class="col-md-1">

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
