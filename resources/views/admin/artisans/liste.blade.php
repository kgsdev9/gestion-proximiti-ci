@extends('admin.layouts.app')

@section('title', 'Annuaire des artisans')

@section('master')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Annuaire des artisans </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Artisanns</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row row-sm"> <div class="col-lg-12"> <div class="card custom-card"> <div class="card-header border-bottom"> <h3 class="card-title">Bordered Table</h3> </div> <div class="card-body"> <p class="text-muted">Add borders on all sides of the table and cells.</p><div class="table-responsive"> <table class="table text-nowrap text-md-nowrap table-bordered"> <thead><tr><th>ID</th><th>Name</th><th>Position</th><th>Salary</th></tr> </thead> <tbody><tr><td>1</td><td>Kevin Powell</td><td>Business Development Associator</td><td>$50,300</td></tr><tr><td>2</td><td>Mark Ronson</td><td>Sales Manager</td><td>$45,500</td></tr><tr><td>3</td><td>Katy Perry</td><td>Data Analyst</td><td>$425,500</td></tr><tr><td>4</td><td>Pam Podrick</td><td>Python Developer</td><td>$415,900</td></tr><tr><td>5</td><td>Sandy Orell</td><td>Backed Developer</td><td>$95,900</td></tr> </tbody></table> </div> </div> </div> </div> </div>
            <div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="col-md-12">
								<div class="tab-content table-responsive" tabindex="1" style="overflow: hidden; outline: none; touch-action: none;">

                                        <a  href="{{route('artisan.create')}}" class="btn btn-success text-white" >
                                         <i class="fa fa-plus"></i> Nouvel Artisan
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
														Nom Prenom
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 185.438px;">
														Statut
													</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 185.438px;">
														Télephone
													</th>




                                                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 185.438px;">
														Specialité
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 254.234px;">
											    			Commune
													</th>
                                                        <th>Fiche technique</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 346.359px;"></th>
												</tr>
											</thead>
											<tbody id="tbody">

                                                @foreach ($artisans as $value)
												<tr role="row" class="odd">
													<th class="sorting_1">
														{{$value->name}} {{$value->prenom}}
													</th>

													<th>
														{{$value->status}}
													</th>

                                                    <th>
														{{$value->telephone}}
													</th>


                                                    <th>

                                                        {{$value->specilaite->libelle
                                                        }}
                                                    </th>


                                                    <th>

                                                        {{$value->commune
                                                        }}
                                                    </th>
                                                    <th>

                                                       <a href="{{route('artisan.show', $value->id)}}">Consulter</a>
                                                    </th>

													<th>
														<a href="{{route('artisan.edit', $value->id)}}" class="btn btn-primary text-white"> <i class="fa fa-edit"></i></a>
                                                        <br><br>
                                                         <form action="{{route('artisan.destroy', $value->id)}}" method="POST">
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
