<div class="container mt-4">
    <h3>Gestion des Catégories de News</h3>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card mb-3">
        <div class="card-body">

            <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}">
                <div class="form-group">
                    <label for="name">Nom de la Catégorie</label>
                    <input type="text" id="title" class="form-control" wire:model="title">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                @if ($isEditing)
                <div class="form-group">
                    <label for="name">Slug</label>
                    <input type="text" id="slug" class="form-control" wire:model="slug">
                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                @endif
                <button type="submit" class="btn btn-primary mt-2" >
                    {{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}
                </button>
                @if ($isEditing)
                    <button type="button" class="btn btn-secondary mt-2" wire:click="resetForm">Annuler</button>
                @endif
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($catNews as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->title }}</td>
                    <td>
                        <button class="btn btn-info btn-sm" wire:click="edit({{ $cat->id }})">Modifier</button>
                        <button onclick="confirmDeletion({{ $cat->id }})" class="btn btn-danger btn-sm delete_user">Supprimer</button>
                        <!--<button class="btn btn-danger btn-sm" wire:click="delete({{ $cat->id }})">Supprimer</button>-->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
