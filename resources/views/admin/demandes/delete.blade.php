<!-- Modal -->
<div class="modal fade" id="modalDeleteDemande-{{$demandeServAgrement->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Supprime le demande') }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.demandes.destroy', $demandeServAgrement->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                {{ __('Voulez-vous supprimer cette demande?') }}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Annulée')}}</button>
            <button type="submit" class="btn btn-danger"><i class="mdi mdi-trash-can"></i> {{ __('Supprime') }}</button>
            </div>
        </form>
      </div>
    </div>
</div>
