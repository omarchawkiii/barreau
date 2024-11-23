<!-- Modal -->
<div class="modal fade" id="modalStatusDemande-{{$demandeServAgrement->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Statut de la demande') }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.demandes.status', $demandeServAgrement->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <select class="form-select" id="" name="status" aria-label="Floating label select example">
                                <option value="encours" {{ $demandeServAgrement->status == 'encours' ? 'selected' : '' }}>Encours</option>
                                <option value="traitee" {{ $demandeServAgrement->status == 'traitee' ? 'selected' : '' }}>Traitée</option>
                                <option value="payer"   {{ $demandeServAgrement->status == 'payer' ? 'selected' : '' }}>A payer</option>
                            </select>
                            <label for="status">{{ __('Statut de la demande')}}</label>
                          </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Annulée')}}</button>
            <button type="submit" class="btn btn-outline-warning">{{ __('Modifier') }}</button>
            </div>
        </form>
      </div>
    </div>
</div>
