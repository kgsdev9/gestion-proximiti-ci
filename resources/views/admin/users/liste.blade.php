@extends('admin.layouts.app')


@section('title',  'Annuaire Utilisateurs ')

@section('master')




 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0 font-size-18">Annuire utilisateurs</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                 <li class="breadcrumb-item active">Utilisateurs</li>
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
                                 <h4 class="card-title mb-0 flex-grow-1">Liste des utilisateurs</h4>
                             </div>

                             <div class="col-md-2">
                                 <a href="{{route('users.create')}}" class="btn btn-primary"> <i class="fa fa-add"></i>Nouvel utilisateur</a>
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
                                         <th scope="col">Nom d'utilisateur</th>
                                         <th scope="col">Email</th>
                                         <th scope="col">Role</th>

                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($users as $value)


                                     <tr>


                                         <td>
                                             {{$value->name}}
                                           </td>

                                           <td>
                                             {{$value->email}}
                                           </td>

                                           <td>
                                             {{$value->role->name}}
                                           </td>


                                         <td>
                                             <div class="row">
                                                 <div class="col-md-2">
                                                     <a class="btn btn-success" href="{{route('users.edit', $value->id)}}" ><i class="fa fa-edit"></i></a>

                                                 </div>
                                                 <div class="col-md-1">

                                                 </div>

                                                 <div class="col-md-2">
                                                     <form action="{{route('users.destroy', $value->id)}}" method="POST">
                                                          @csrf
                                                         @method('DELETE')
                                                         <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous supprimer le fournisseur?')"><i class="fa fa-trash"></i></button>
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
