<div>


    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="exampleFormControlInput2">Prix</label>
                            <input type="number" class="form-control" wire:model="prix" id="exampleFormControlInput2" >
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Quantité</label>
                            <input type="number" class="form-control" wire:model="quantite" id="exampleFormControlInput2" >
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Total</label>
                            <input class="form-control"  value="{{$prix * $quantite}}" type="number" readonly>
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Télephone</label>
                            <input type="text" class="form-control" wire:model="telephone" id="exampleFormControlInput2" >
                            @error('telephone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Status</label>
                            <select wire:model="status"  class="form-control">
                                <option value="haute">Haute</option>
                                <option value="base">Base</option>
                                <option value="moyenne">Moyennne</option>
                            </select>
                            @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">email</label>
                            <input type="text" class="form-control" wire:model="email" id="exampleFormControlInput2" >
                            @error('telephone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">description</label>
                           <textarea wire:model="description" class="form-control" id="" cols="30" rows="3"></textarea>
                            @error('telephone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">nomfournisseur</label>
                           <textarea wire:model="nomfournisseur" class="form-control" id="" cols="30" rows="3"></textarea>
                            @error('telephone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">addresfournisseur</label>
                           <textarea wire:model="addresfournisseur" class="form-control" id="" cols="30" rows="3"></textarea>
                            @error('telephone') <span class="text-danger">{{ $message }}</span>@enderror
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
