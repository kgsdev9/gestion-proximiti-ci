<div wire:ignore.self class="modal fade" id="EquipementeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
        <form wire:submit.prevent="updateEquipment">
		<div class="modal-content">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
			<div class="modal-body">

                <input type="hidden" wire:model="equipmentID">
				<div class="form-group">
                    <label for="" class="form-label">Désignationss</label>
                    <input type="text" wire:model="designation" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Prix</label>
                    <input type="number" wire:model="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Quantite</label>
                    <input type="number" wire:model="quantite" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Fournisseur</label>
                    <input type="text" wire:model="fournisseur" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Déscription</label>
                    <textarea wire:model="description" id="" cols="30" rows="2" class="form-control"></textarea>
                </div>

			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
		</div>
    </form>
	</div>
</div>
