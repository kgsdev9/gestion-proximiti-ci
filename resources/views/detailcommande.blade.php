@extends('admin.layouts.app')

@section('master')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Detail du bon de commande</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail</a></li>
                                <li class="breadcrumb-item active">Bon de commande</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <div class="mb-4">
                                            <img src="assets/images/logo-sm.svg" alt="" height="24"><span class="logo-txt">Minia</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="mb-4">
                                            <h4 class="float-end font-size-16">Invoice # 12345</h4>
                                        </div>
                                    </div>
                                </div>


                                <p class="mb-1">1874 County Line Road City, FL 33566</p>
                                <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i> abc@123.com</p>
                                <p><i class="mdi mdi-phone align-middle me-1"></i> 012-345-6789</p>
                            </div>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="font-size-15 mb-3">Billed To:</h5>
                                        <h5 class="font-size-14 mb-2">Richard Saul</h5>
                                        <p class="mb-1">1208 Sherwood Circle
                                            Lafayette, LA 70506</p>
                                        <p class="mb-1">RichardSaul@rhyta.com</p>
                                        <p>337-256-9134</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <div>
                                            <h5 class="font-size-15">Order Date:</h5>
                                            <p>February 16, 2020</p>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="font-size-15">Payment Method:</h5>
                                            <p class="mb-1">Visa ending **** 4242</p>
                                            <p>richards@email.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 mt-3">
                                <h5 class="font-size-15">Order summary</h5>
                            </div>
                            <div class="p-4 border rounded">
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th >Désignation</th>
                                                <th>Quantite</th>
                                                <th>Prix</th>
                                                <th >TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $value)
                                            <tr>
                                                <td>
                                                  {{$value->designation}}
                                                </td>
                                                <td>{{$value->quantite}} FCFA</td>
                                                <td>{{$value->prix}}</td>
                                                <td>{{$value->total}}</td>
                                            </tr>
                                            @endforeach


                                            <div class="row">
                                                <div class="col-md-8">

                                                </div>
                                                <div class="col-md-4">
                                                    <tr>
                                                        <th scope="row" colspan="2" class="border-0 text-end">Total</th>
                                                        <td class="border-0 text-end"><h4 class="m-0"></h4>   {{ $value->sommeCommande($data)}} FCFA</td>
                                                    </tr>
                                                </div>

                                            </div>
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                            <div class="d-print-none mt-3">
                                <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                    <button data-bs-toggle="modal" data-bs-target="#showModal" wire:click="show({{$}})" class="btn btn-primary">Consulter</button>
                                    <a href="#" class="btn btn-primary w-md waves-effect waves-light">Transferer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>






@endsection
