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
            <livewire:tables.events-table />
        </div>
    </div>
  
    <!-- Modal Formulaire -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'événement' : 'Ajouter un événement' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}" id="event-form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" class="form-control" wire:model.defer="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3" wire:ignore>
                            <label for="content">Contenu</label>
                            <textarea id="wysiwyg" class="form-control" hidden></textarea>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <textarea id="hidden-content" type="hidden" style="display:none" wire:model="content"></textarea>
                        
                        <div class="form-group mt-3">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" id="thumbnail" class="form-control" wire:model="thumbnail">
                            @error('thumbnail') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3">
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
                        <button type="submit" 
                                class="btn btn-primary" 
                                wire:loading.attr="disabled">
                            <span wire:loading.remove>{{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}</span>
                            <span wire:loading>Uploading...</span>
                        </button>
            
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- modal view --}}
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de l\'événement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <p>{{ $event?->title }}</p>
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="content">Contenu</label>
                        {!! $event?->content !!}
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="thumbnail">Thumbnail</label><br>
                        <img src="{{ $event?->thumbnail_url }}" alt="{{$title}}" class="avatar-xl">
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="cat_event_id">Catégorie</label>
                        <p>{{ $event?->catEvent->title }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
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
        $('#eventModal').modal('show');
        @this.call('edit', id);
    }

    function view(id) {
        $('#viewModal').modal('show');
        @this.call('view', id);
    }
</script>
<script>
    window.addEventListener('close-modal', event => {
        $('#eventModal').modal('hide');
        $('#viewModal').modal('hide');
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


<script src="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.umd.js"></script>

<script>
    function initializeScript() {
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;

        ClassicEditor
            .create( document.querySelector( '#wysiwyg' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            }).then(editor => {

                const form = document.getElementById('event-form');
                form.addEventListener('submit', () => {
                    document.getElementById('hidden-content').value = editor.getData();
                    @this.set('content', editor.getData());
                });

                document.addEventListener('edit', event => {
                    console.log(event)
                    console.log(event.detail.event_data)

                    editor.setData(event.detail.event_data.content)
                });

            })
            .catch(error => {
                console.error(error);
            });

    }   

    initializeScript();

</script>
