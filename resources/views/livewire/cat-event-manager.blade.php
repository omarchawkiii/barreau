<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="text-lg-start my-1 my-lg-0">
                               <h4> Gestion des catégories des evenements</h4>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="text-lg-end my-1 my-lg-0">
                                <button class="btn btn-barreau-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                    <i class="mdi mdi-plus-circle me-2"></i> Ajouter nouveau
                                </button>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <livewire:tables.cat-events-table />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal pour le formulaire -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">{{ $isEditing ? 'Modifier la Catégorie' : 'Ajouter une Catégorie' }}</h5>
                    <button type="button" class="btn-close"  aria-label="Close" data-bs-dismiss="modal" wire:click="resetForm" ></button>
                </div>

                <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Nom de la Catégorie</label>
                            <input type="text" id="title" class="form-control" wire:model="title" wire:model.defer="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @if ($isEditing)
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" id="slug" class="form-control" wire:model="slug"  wire:model.defer="slug">
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @endif

                </div>
                <div class="modal-footer">
                    <button wire:click.prevent="{{ $isEditing ? 'update' : 'add' }}" class="btn btn-primary">
                        {{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}
                    </button>
                    <button type="button" class="btn btn-secondary" wire:click="resetForm" data-bs-dismiss="modal">Annuler</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- SweetAlert pour la confirmation de suppression -->
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
        $('#categoryModal').modal('show');
        @this.call('edit', id);

    }
</script>

<script>
    window.addEventListener('close-modal', event => {
        $('#categoryModal').modal('hide');
    });
</script>


<script>
    window.addEventListener('swal', event => {


        Swal.fire({
            title:  event.detail.title,
            text:event.detail.text,

            icon: event.detail.icon,
            iconColor: event.detail.iconColor,
            timer: 3000,
            position: 'center-center',
            showConfirmButton:  false,
        });

    });


</script>
