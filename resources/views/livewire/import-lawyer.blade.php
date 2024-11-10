

<div class="container ">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="text-lg-start my-1 my-lg-0">
                               <h4> Gestion des Avocats</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-sm-end">

                                <button class="btn btn-barreau-primary" data-bs-toggle="modal" data-bs-target="#uplad_lawyer">
                                    <i class="mdi mdi-cloud-upload me-2"></i> Importer les avocats
                                </button>


                                <button class="btn btn-barreau-primary" data-bs-toggle="modal" data-bs-target="#newModal">
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
                        <th>Code</th>
                        <th> Nom </th>
                        <th>Prénom</th>
                        <th>Etat</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lawyers as $lawyer )
                        <tr>
                            <td>{{ $lawyer->code }}</td>
                            <td>{{ $lawyer->nom_fr }}</td>
                            <td>{{ $lawyer->prenom_fr }}</td>
                            <td>{{ $lawyer->etat }}</td>
                            <td>{{ $lawyer->email }}</td>
                            <td>{{ $lawyer->tel }}</td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon" onclick="edit({{ $lawyer->id }})"> <i class="mdi mdi-square-edit-outline text-warning"></i></button>
                                <a href="javascript:void(0);" class="action-icon" onclick="confirmDeletion({{ $lawyer->id }})"> <i class="mdi mdi-delete text-danger" ></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Formulaire -->

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'événement' : 'Ajouter un événement' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}">


                    <div class="modal-body">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" id="code" class="form-control" wire:model="code">
                                @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nom_arb">Nom (Arabe)</label>
                                <input type="text" id="nom_arb" class="form-control" wire:model="nom_arb">
                                @error('nom_arb') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="prenom_arb">Prénom (Arabe)</label>
                                <input type="text" id="prenom_arb" class="form-control" wire:model="prenom_arb">
                                @error('prenom_arb') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="date_naiss">Date de Naissance</label>
                                <input type="date" id="date_naiss" class="form-control" wire:model="date_naiss">
                                @error('date_naiss') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nom_fr">Nom (Français)</label>
                                <input type="text" id="nom_fr" class="form-control" wire:model="nom_fr">
                                @error('nom_fr') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="prenom_fr">Prénom (Français)</label>
                                <input type="text" id="prenom_fr" class="form-control" wire:model="prenom_fr">
                                @error('prenom_fr') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
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

    <div class="modal fade" id="uplad_lawyer" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="upload_lawyer" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Dropify File Upload</h4>
                                            <p class="sub-header">
                                                Override your input files with style. Your so fresh input file — Default version.
                                            </p>
                                            <input type="file" wire:model="excelFile" id="excelFile" class="form-control">
                                            @error('excelFile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                        <button type="submit" class="btn btn-primary" {{ $loading ? 'disabled' : '' }}>
                            <span wire:loading.remove wire:target="upload">Uploader</span>
                            <span wire:loading wire:target="upload">Chargement...</span>

                            </button>
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
</script>
<script>
    window.addEventListener('close-modal', event => {
        $('#newModal').modal('hide');
        $('#uplad_lawyer').modal('hide');
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

