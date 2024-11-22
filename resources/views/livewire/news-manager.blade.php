<div class="container ">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="text-lg-start my-1 my-lg-0">
                               <h4> Gestion des News</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-lg-end my-1 my-lg-0">
                                <button class="btn btn-barreau-primary" data-bs-toggle="modal" data-bs-target="#newsModal">
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
            <livewire:tables.news-table />
        </div>
    </div>

    <!-- Modal Formulaire -->
    <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'événement' : 'Ajouter un événement' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}" id="news-form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" class="form-control" wire:model.defer="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3" wire:ignore>
                            <label for="content">Contenu</label>
                            <textarea id="wysiwyg" class="form-control"></textarea>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <textarea id="hidden-content" type="hidden" style="display:none" wire:model="content"></textarea>
                        
                        <div class="form-group mt-3">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" id="thumbnail" class="form-control" wire:model="thumbnail">
                            @error('thumbnail') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                        <div class="form-group mt-3">
                            <label for="cat_news_id">Catégorie</label>
                            <select id="cat_news_id" class="form-control" wire:model.defer="cat_news_id">
                                <option value="">Choisir une catégorie</option>
                                @foreach ($cat_newses as $cat )
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                            @error('cat_news_id') <span class="text-danger">{{ $message }}</span> @enderror
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

     {{-- modal view --}}
     <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de l\'événement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <p>{{ $news?->title }}</p>
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="content">Contenu</label>
                        {!! $news?->content !!}
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="thumbnail">Thumbnail</label><br>
                        <img src="{{ $news?->thumbnail_url }}" alt="{{$title}}" class="avatar-xl">
                    </div>
                    <hr>
                    <div class="form-group mt-3">
                        <label for="cat_news_id">Catégorie</label>
                        <p>{{ $news?->catNews->title }}</p>
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
        $('#newsModal').modal('show');
        @this.call('edit', id);
    }
    function view(id) {
        $('#viewModal').modal('show');
        @this.call('view', id);
    }
</script>
<script>
    window.addEventListener('close-modal', event => {
        $('#newsModal').modal('hide');
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

                const form = document.getElementById('news-form');
                form.addEventListener('submit', () => {
                    document.getElementById('hidden-content').value = editor.getData();
                    @this.set('content', editor.getData());
                });

                document.addEventListener('edit', event => {
                    console.log(event)
                    console.log(event.detail.news_data)

                    editor.setData(event.detail.news_data.content)
                });

            })
            .catch(error => {
                console.error(error);
            });

    }   

    initializeScript();

</script>