@extends('admin.layouts.app')


@section('title',  'Annuaire Utilisateurs ')

@section('master')

<div class="main-content">
	<base href="#">
		<!-- begin::page-header -->
		<div class="page-header">
			<div class="container-fluid d-sm-flex justify-content-between">
				<h4>Liste des utilisateurs </h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="accueil">accueil</a></li>
						<li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- end::page-header -->
		<!-- begin::page content -->
		<div class="container-fluid">

            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Deals Status</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">02 Nov 2021 to 31 Dec 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="text-muted">
                                            <th scope="col">Name</th>
                                            <th scope="col" style="width: 20%;">Last Contacted</th>
                                            <th scope="col">Sales Representative</th>
                                            <th scope="col" style="width: 16%;">Status</th>
                                            <th scope="col" style="width: 12%;">Deal Value</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Absternet LLC</td>
                                            <td>Sep 20, 2021</td>
                                            <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Donald Risher</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span></td>
                                            <td>
                                                <div class="text-nowrap">$100.1K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raitech Soft</td>
                                            <td>Sep 23, 2021</td>
                                            <td><img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Sofia Cunha</a>
                                            </td>
                                            <td><span class="badge bg-warning-subtle text-warning p-2">Intro Call</span></td>
                                            <td>
                                                <div class="text-nowrap">$150K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>William PVT</td>
                                            <td>Sep 27, 2021</td>
                                            <td><img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Luis Rocha</a>
                                            </td>
                                            <td><span class="badge bg-danger-subtle text-danger p-2">Stuck</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.18K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Loiusee LLP</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span></td>
                                            <td>
                                                <div class="text-nowrap">$180K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-primary-subtle text-primary p-2">New Lead</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.9K</div>
                                            </td>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->


            </div> --}}
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="col-md-12">
								<div class="tab-content table-responsive" tabindex="1" style="overflow: hidden; outline: none; touch-action: none;">

                                <a href="{{route('users.create')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Nouvel Utilisateur</a>

                                <br>

                                    <br>
									<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                      <div class="row">
                                      </div>
										<table class="table table-striped table-bordered myTable dataTable no-footer" id="datatable-buttons" role="grid" aria-describedby="DataTables_Table_0_info">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 138.078px;">
														Utilisateur
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 185.438px;">
														email
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 254.234px;">
											    			role
													</th>



													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 346.359px;"></th>
												</tr>
											</thead>
											<tbody id="tbody">

                                                @foreach ($users as $value)
												<tr role="row" class="odd">
													<th class="sorting_1">
														{{$value->name}}
													</th>

													<th>
														{{$value->email}}
													</th>
                                                    <th>

                                                        {{$value->role->name}}
                                                    </th>

													<th>
														<a href="{{route('users.edit', $value->id)}}" class="btn btn-primary text-white"> <i class="fa fa-edit"></i></a>
                                                        <br><br>
                                                         <form action="{{route('users.destroy', $value->id)}}" method="POST">
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
			</div>
		</div>
		<!-- end::page content -->
	</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Soumetre le fichier </h5>

        </div>
        <div class="modal-body">
            <label for="">Soumetre le fichier </label>
            <input type="file" name="file" class="form-control" value="{{old('file')}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer </button>
          <button  class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
      </div>
    </form>
    </div>
  </div>





@endsection
