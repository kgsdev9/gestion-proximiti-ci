<div>
	<div class="main-content">
		<div class="page-content">
			<div class="container-fluid">
				<!-- Main content -->

                @include('livewire.entrees.update')
				<section class="content" style="margin-top:-5px;">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<div class="page-title-box d-sm-flex align-items-center justify-content-between">
										<h4 class="mb-sm-0 font-size-18">
											Bienvenue {{Auth::user()->
											name}}
										</h4>
										<div class="page-title-right">
											<ol class="breadcrumb m-0">
												<li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
												<li class="breadcrumb-item active">Tableau de bord </li>
											</ol>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">
												Nouvelle Entrée
											</h5>
										</div>
										<div class="card-body pt-0">
                                            <form wire:submit.prevent="storePost">
												<div class="settings-form">
													<div class="form-group">

														<label>Désignation <span class="star-red">*</span></label>
														<input type="text" wire:model="designation" class="form-control" placeholder="Intervention ">
													</div>

                                                    <div class="form-group">
														<label>Montant <span class="star-red">*</span></label>
														<input type="number" wire:model="montant" class="form-control" placeholder="2344">
													</div>

                                                    <div class="form-group">
														<label>Description <span class="star-red">*</span></label>
														<textarea wire:model="description" class="form-control" id="" cols="30" rows="10"></textarea>
													</div>



                                                    <br><br>
													<div class="form-group mb-0">
														<div class="settings-btns">

															<button type="submit" class="btn btn-primary">Enregistrer l'entrée </button>

														</div>
													</div>

												</div>

											</form>
										</div>
									</div>
								</div>


                                <div class="col-md-8">
                                    <div class="container-fluid">


                                    <div class="card">
                                        <br>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <button type="button" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i>lISTE DES ENTREES</button>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <input type="text" class="form-control form-control-sm" wire:model="search" placeholder="chercher"><br>
                                        </div> &nbsp;
                                    </div>

                                    <table  class="table align-middle datatable dt-responsive table-check nowrap dataTable no-footer" style="border-collapse: collapse; border-spacing: 0px 8px; width: 100%;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr class="bg-transparent">

                                                <th style="width: 67px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Invoice ID: activate to sort column ascending">
                                                    Désignation
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 63px;">
                                                    Montant
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Billing Name: activate to sort column ascending" style="width: 91px;">
                                                    Description
                                                </th>

                                                <th style="width: 44px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($ressourceEntree as $value)


                                            <tr class="odd">

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body fw-medium">{{$value->designation}}</a>
                                                </td>
                                                <td>
                                                    {{$value->montant}} FCFA
                                                </td>
                                                <td class="">
                                                    {{$value->description}}
                                                </td>


                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                                        <ul class="dropdown-menu dropdown-menu-end">

                                                            <li>
                                                                <button data-bs-toggle="modal" data-bs-target="#updateModalEntree" wire:click="edit({{$value->id}})" class="btn btn-primary btn-sm">Edition</button>
                                                            </li>
                                                            <li>
                                                                <button data-bs-toggle="modal" data-bs-target="#showModal" wire:click="show(8)" class="btn btn-primary btn-sm">Consulter</button>
                                                                <a class="dropdown-item" href="#">Consulter</a></li>
                                                            <li>


                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                    {{$ressourceEntree->links()}}
                                </div>

                            </div>
							</div>
                        </div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</section>
				<!-- /.content -->
			</div>
		</div>
