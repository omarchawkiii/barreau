<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="text-lg-start my-1 my-lg-0">
                               <h4> Gestion des Événements</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-lg-end my-1 my-lg-0">
                                <button class="btn btn-barreau-primary " data-bs-toggle="modal" data-bs-target="#eventModal">
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
            <table id="data-listing" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Image </th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td><img src="{{  asset('storage/'.$event->thumbnail)  }}"  class=" avatar-xl"/> </td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->slug }}</td>
                            <td>{{ $event->catEvent->title }}</td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon" onclick="edit_event({{ $event->id }})"> <i class="mdi mdi-square-edit-outline text-warning"></i></button>
                                <a href="javascript:void(0);" class="action-icon" onclick="confirmDeletion({{ $event->id }})"> <i class="mdi mdi-delete text-danger" ></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Formulaire -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'événement' : 'Ajouter un événement' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" class="form-control" wire:model.defer="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Contenu</label>
                            <textarea id="content" class="form-control" wire:model.defer="content"></textarea>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" id="thumbnail" class="form-control" wire:model="thumbnail">
                            @error('thumbnail') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                        <div class="form-group">
                            <label for="cat_event_id">Catégorie</label>
                            <select id="cat_event_id" class="form-control" wire:model.defer="cat_event_id">
                                <option value="">Choisir une catégorie</option>
                                @foreach ($cat_events as $cat )
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                            @error('cat_event_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">{{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}</button>
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
    function edit_event(id) {
        $('#eventModal').modal('show');
        @this.call('edit', id);

    }
</script>
<script>
    window.addEventListener('close-modal', event => {
        $('#eventModal').modal('hide');
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


@section('custom_script')
    <script>
        $(document).ready(function() {
            $("#data-listing").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            });
        });
    </script>
@endsection
