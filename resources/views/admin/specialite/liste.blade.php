@extends('admin.layouts.app')

@section('title', 'Liste des specialités')

@section('master')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Annuaire des spécialités </h4>

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

            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="col-md-12">
								<div class="tab-content table-responsive" tabindex="1" style="overflow: hidden; outline: none; touch-action: none;">

                                        <a  href="{{route('specialite.create')}}" class="btn btn-success text-white" >
                                         <i class="fa fa-plus"></i> Nouvel Specialité
                                        </a>

                                   </div>


                                <br>

                                    <br>
									<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                      <div class="row">
                                      </div>
										<table   id="datatable-buttons"  class="table table-striped table-bordered myTable dataTable no-footer"   role="grid" aria-describedby="DataTables_Table_0_info">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 138.078px;">
														Libélle
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 185.438px;">
														Description
													</th>



													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 346.359px;"></th>
												</tr>
											</thead>
											<tbody id="tbody">

                                                @foreach ($specialites as $value)
												<tr role="row" class="odd">
													<th class="sorting_1">
														{{$value->libelle}}
													</th>

													<th>
														{{$value->description}}
													</th>


													<th>
														<a href="{{route('specialite.edit', $value->id)}}" class="btn btn-primary text-white"> <i class="fa fa-edit"></i></a>
                                                        <br><br>
                                                         <form action="{{route('specialite.destroy', $value->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer?')"><i class="fa fa-trash"></i></button>
                                                         </form>

													</th>
												</tr>

                                                @endforeach





											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



</div>

@endsection
