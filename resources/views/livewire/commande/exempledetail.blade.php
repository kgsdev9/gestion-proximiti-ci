<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="card invoice-info-card">
							<div class="card-body pb-0">
								<div class="invoice-item invoice-item-one">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-logo">
												<img src="{{asset('logo_footer.png')}}" alt="logo" style="height: 90px; width:90px;">
											</div>
										</div>
										<div class="col-md-6">
											<div class="invoice-info">
												<div class="invoice-head">
													<h2 class="text-primary">Numero de commande </h2>
													<p>
													{{$commande->codeCommande}}
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="invoice-item invoice-item-bg">
									<div class="invoice-circle-img">
										<img src="assets/img/invoice-circle1.png" alt="" class="invoice-circle1">
										<img src="assets/img/invoice-circle2.png" alt="" class="invoice-circle2">
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-12">
											<div class="invoice-info">

												<h6 class="invoice-name">
                                                    Compte Contribuable N° 2242525A
												</h6>
												<p class="invoice-details invoice-details-two">
													RCCM : CI-ABJ-03-2022-B13-05599
													<br>
													SARLU au capital de 1.000.000 F CFA
													<br>
													Lieu : Riviera Bonoumin - Rond point ADO
													<br>
													Contact : +225 05 00 50 79 52
                                                    <br>
                                                    E-mail : contact@proximiti.ci
                                                    <br>
                                                    Site : www.proximiti.ci
												</p>

                                                <h5>Identite client: {{$commande->fullname}}</h5>
                                                <span>Contact : {{$commande->telephone_client}}</span> <br>
                                                <span>Adresse des travaux : {{$commande->adresse_intervention}} </span>
											</div>
										</div>
										<div class="col-lg-4 col-md-12">

										</div>
										<div class="col-lg-4 col-md-12">
											<div class="invoice-info invoice-info-one border-0">
												<p>
													Devis Numéro : 	{{$commande->codeCommande}}
												</p>
												<p>
													Date : {{date('d/m/Y', strtotime($commande->created_at))}}
												</p>
												<p>
													Expiration le :	{{date('d/m/Y', strtotime($commande->expired_at))}}
												</p>
												<p>
													Code Client : 	{{$commande->client->codeClient}}
												</p>

											</div>
										</div>
									</div>
								</div>
								<div class="invoice-item invoice-table-wrap">
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="invoice-table table table-center mb-0">
													<thead>
														<tr>
															<th>
																Désignation
															</th>

															<th>
																Prix
															</th>
															<th>
																Quantité
															</th>

															<th class="text-end">
																Ttoal
															</th>
														</tr>
													</thead>
													<tbody>

                                                        @foreach ($ressource as  $data)
                                                        <tr>
															<td>
																{{$data->designation}}
															</td>
															<td>
																{{$data->prix}} FCFA
															</td>

															<th>
																{{$data->quantite}}
															</th>

															<td class="text-end">
																{{$data->total}} FCFA
															</td>
														</tr>
                                                        @endforeach



													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-center justify-content-center">

									<div class="col-lg-6 col-md-6">
										<div class="invoice-total-card">
											<div class="invoice-total-box">

												<div class="invoice-total-footer">
													<h4>Total du bon d'achat <span> {{$data->sommeCommande($ressource)}}</span></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="invoice-sign-box">
									<div class="row">
										<div class="col-lg-8 col-md-8">
											<div class="invoice-terms">
												<h6>
													Condition de réglement :
												</h6>
												<p class="mb-0">
													Accompte de 30% à la commande Solde à la livraison des travaux
												</p>
											</div>
											<div class="invoice-terms mb-0">
												<h6>
													Si le devis vous convient, merci de nous le retourner signé et marqué de la mention "Bon pour accord et commande"
												</h6>

											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
