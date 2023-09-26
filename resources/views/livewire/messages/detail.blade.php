@extends('admin.layouts.app')
@section('title','Detail de la méssagerie')


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
                        <h4 class="mb-sm-0 font-size-18">Bienvenuesss {{Auth::user()->name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Tableau de bord </li>
                            </ol>
                        </div>
                            @foreach ($ressource->artisans as $value)
                                    <span>{{$value->name}}</span>
                            @endforeach
                    </div>
                </div>
            </div>
          <div class="card">

            <!-- /.card-header -->

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
{{-- foreach( (array) $sesion as $s){
    $sum_quantity = $sum_quantity +$s['quantity'];
 };
 foreach( (array)$sesion as $s){
     $total_cart = $total_cart + $s['price']*$s['quantity'];
  }; --}}
