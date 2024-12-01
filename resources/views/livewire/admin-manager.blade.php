<div class="container ">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="text-lg-start my-1 my-lg-0">
                                <h4> Gestion des Admin</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-sm-end">
                                <button class="btn btn-barreau-primary" data-bs-toggle="modal"
                                    data-bs-target="#newModal">
                                    <i class="mdi mdi-plus-circle me-2"></i> Ajouter nouveau
                                </button>

                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>


    <div class="card">
        <div class="card-body">
            <livewire:tables.admins-table />
        </div>
    </div>

    <!-- Modal Formulaire -->

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'admin' : 'Ajouter un admin' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="resetForm"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}">
                    <div class="modal-body row">
                        <div class="form-group col-12 mt-3">
                            <label for="name">Nom</label>
                            <input type="text" id="name" class="form-control" wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12 mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" wire:model="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12 mt-3">
                            <label for="password">Mot de passe </label>
                            <input type="password" id="password" class="form-control" wire:model="password" autocomplete>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mt-3">
                            <label for="password_confirmation">Confirmer le mot de passe </label>
                            <input type="password" id="password_confirmation" class="form-control" wire:model="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="resetForm">Annuler</button>
                        <button type="submit"
                            class="btn btn-primary">{{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal view -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ "Détails de l\'admin" }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="form-group col-3 mt-3">
                    <label for="name">Nom : </label>
                    <span>{{ $admin?->name }}</span>
                </div>

                <div class="form-group col-3 mt-3">
                    <label for="email">Email : </label>
                    <span>{{ $admin?->email }}</span>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    function confirmDeletion(id) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: "Cette action est irréversible!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {

                @this.call('delete', id);
            }
        });
    }
</script>
<script>
    function edit(id) {
        $('#newModal').modal('show');
        @this.call('edit', id);
    }
    function view(id) {
        $('#viewModal').modal('show');
        @this.call('view', id);
    }
</script>
<script>
    window.addEventListener('close-modal', event => {
        @this.call('resetForm');
        $('#newModal').modal('hide');
        $('#viewModal').modal('hide');
    });
</script>


<script>
    window.addEventListener('swal', event => {

        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            iconColor: event.detail.iconColor,
            timer: 3000,
            position: 'center-center',
            showConfirmButton: false,
        });

    });
</script>
