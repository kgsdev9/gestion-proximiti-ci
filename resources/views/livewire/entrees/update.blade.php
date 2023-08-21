<div>


    <div wire:ignore.self class="modal fade" id="updateModalEntree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" wire:model="user_id">
                            <label for="exampleFormControlInput1">Désignation</label>
                            <input type="text" class="form-control" wire:model="designation" id="exampleFormControlInput1">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Montant</label>
                            <input type="number" class="form-control" wire:model="prix" id="exampleFormControlInput2" >
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Description</label>
                            <input type="number" class="form-control" wire:model="quantite" id="exampleFormControlInput2" >
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()">Fermer</button>
                    <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
           </div>
        </div>
    </div>



</div>
