<!-- Modal -->
<div class="modal fade modalEditDossier" id="modalEditDossier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Modifier ce dossier') }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateDossierForm" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                        <input type="text" name="titre_ficher" id="input_titre_ficher" class="form-control @error('titre_ficher') is-invalid @enderror" value="">
                        <span class="text-danger error-text titre_ficher_error"></span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                        <input type="file" name="ficher"  id="input_ficher" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control @error('ficher') is-invalid @enderror">
                        <div id="documentLinkContainer"></div>
                        <span class="text-danger error-text ficher_error"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Annulée')}}</button>
            <button type="button" id="submitDoossierUpdate" class="btn btn-outline-warning">{{ __('Modifier') }}</button>
            </div>
        </form>
      </div>
    </div>
</div>
