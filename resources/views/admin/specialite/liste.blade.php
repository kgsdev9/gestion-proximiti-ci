@extends('admin.layouts.app')

@section('title', 'Liste des specialités')

@section('master')
 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0 font-size-18">Annuire Spécialité</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                 <li class="breadcrumb-item active">Spécialités</li>
                             </ol>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- end page title -->


             <br>
             <div class="col-xl-12">
                 <div class="card">
                   <div class="card-header">
                         <div class="row">
                             <div class="col-md-10">
                                 <h4 class="card-title mb-0 flex-grow-1">Liste des spécialités</h4>
                             </div>

                             <div class="col-md-2">
                                 <a href="{{route('specialite.create')}}" class="btn btn-primary"> <i class="fa fa-add"></i>Nouvelle spécialitée </a>
                             </div>

                         </div>


                         <div class="flex-shrink-0">

                         </div>
                     </div>

                     <div class="card-body">
                         <div class="table-responsive table-card">
                             <table class="table table-borderless table-centered align-middle table-nowrap mb-0" id="myTable">
                                 <thead class="text-muted table-light">
                                     <tr>
                                         <th scope="col">Libellée de la specialité</th>
                                         <th scope="col">Description</th>

                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($specialites as $value)


                                     <tr>
                                         <td>
                                             {{$value->libelle}}
                                           </td>

                                           <td>
                                             {{$value->description}}
                                           </td>

                                         <td>
                                             <div class="row">
                                                 <div class="col-md-2">
                                                     <a class="btn btn-success" href="{{route('specialite.edit', $value->id)}}" ><i class="fa fa-edit"></i></a>
                                                 </div>

                                                 <div class="col-md-2">
                                                     <form action="{{route('specialite.destroy', $value->id)}}" method="POST">
                                                          @csrf
                                                         @method('DELETE')
                                                         <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous supprimer la spécialites?')"><i class="fa fa-trash"></i></button>
                                                     </form>

                                                 </div>

                                             </div>
                                         </td>
                                     </tr><!-- end tr -->

                                     @endforeach


                                 </tbody><!-- end tbody -->
                             </table><!-- end table -->
                         </div>
                     </div>
                 </div> <!-- .card-->
             </div>


             <!-- end row -->


         </div> <!-- container-fluid -->
     </div>
     <!-- End Page-content -->

 </div>





@endsection
