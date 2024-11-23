<!-- Modal -->
<div class="modal fade" id="modalDeleteDossier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Supprimer ce dossier') }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                {{ __('Voulez-vous supprimer cette dossier?') }}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Annulée')}}</button>
            <button type="button" class="btn btn-outline-danger confirmDeleteDossier" id="confirmDeleteDossier">
                {{ __('Supprimer') }}
            </button>
            </div>
      </div>
    </div>
</div>
