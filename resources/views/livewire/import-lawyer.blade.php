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

                                <button class="btn btn-barreau-primary" data-bs-toggle="modal"
                                    data-bs-target="#uplad_lawyer">
                                    <i class="mdi mdi-cloud-upload me-2"></i> Importer les avocats
                                </button>


                                <button class="btn btn-barreau-primary" data-bs-toggle="modal"
                                    data-bs-target="#newModal">
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
            <livewire:tables.lawyers-table />
        </div>
    </div>

    <!-- Modal Formulaire -->

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $isEditing ? 'Modifier l\'événement' : 'Ajouter un événement' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="resetForm"></button>
                </div>
                <form wire:submit.prevent="{{ $isEditing ? 'update' : 'add' }}">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <div class="modal-body row">
                        <div class="form-group col-3 mt-3">
                            <label for="code">Code</label>
                            <input type="text" id="code" class="form-control" wire:model="code">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" wire:model="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3"></div>
                        <div class="form-group col-3 mt-3"></div>

                        {{-- naming --}}
                        <div class="form-group col-3 mt-3">
                            <label for="nom_arb">Nom (Arabe)</label>
                            <input type="text" id="nom_arb" class="form-control" wire:model="nom_arb">
                            @error('nom_arb')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="prenom_arb">Prénom (Arabe)</label>
                            <input type="text" id="prenom_arb" class="form-control" wire:model="prenom_arb">
                            @error('prenom_arb')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 mt-3">
                            <label for="nom_fr">Nom (Français)</label>
                            <input type="text" id="nom_fr" class="form-control" wire:model="nom_fr">
                            @error('nom_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="prenom_fr">Prénom (Français)</label>
                            <input type="text" id="prenom_fr" class="form-control" wire:model="prenom_fr">
                            @error('prenom_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 mt-3">
                            <label for="date_naiss">Date de Naissance</label>
                            <input type="date" id="date_naiss" class="form-control" wire:model="date_naiss">
                            @error('date_naiss')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="etat">Etat</label>
                            <input type="text" id="etat" class="form-control" wire:model="etat">
                            @error('etat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- serment --}}
                        <div class="form-group col-3 mt-3">
                            <label for="date_serment">Date de serment</label>
                            <input type="date" id="date_serment" class="form-control" wire:model="date_serment">
                            @error('date_serment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="lieu_serm">Lieu de serment</label>
                            <input type="text" id="lieu_serm" class="form-control" wire:model="lieu_serm">
                            @error('lieu_serm')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{--  --}}
                        <div class="form-group col-3 mt-3">
                            <label for="grade">Lieu de serment</label>
                            <input type="text" id="grade" class="form-control" wire:model="grade">
                            @error('grade')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="tribunal">Lieu de serment</label>
                            <input type="text" id="tribunal" class="form-control" wire:model="tribunal">
                            @error('tribunal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        {{--  --}}

                        <div class="form-group col-3 mt-3">
                            <label for="adresse_prof_arb">Adresse Professionnelle Arb</label>
                            <input type="text" id="adresse_prof_arb" class="form-control"
                                wire:model="adresse_prof_arb">
                            @error('adresse_prof_arb')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="commune">Commune</label>
                            <input type="text" id="commune" class="form-control" wire:model="commune">
                            @error('commune')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="willaya">Willaya</label>
                            <input type="text" id="willaya" class="form-control" wire:model="willaya">
                            @error('willaya')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="adresse_fr">Adresse Française</label>
                            <input type="text" id="adresse_fr" class="form-control" wire:model="adresse_fr">
                            @error('adresse_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="fin_contrat_local">Fin Contrat Local</label>
                            <input type="date" id="fin_contrat_local" class="form-control"
                                wire:model="fin_contrat_local">
                            @error('fin_contrat_local')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="date_expir_carte">Date Expiration Carte</label>
                            <input type="date" id="date_expir_carte" class="form-control"
                                wire:model="date_expir_carte">
                            @error('date_expir_carte')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="local">Local</label>
                            <input type="text" id="local" class="form-control" wire:model="local">
                            @error('local')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="adresse_domic">Adresse Domicile</label>
                            <input type="text" id="adresse_domic" class="form-control"
                                wire:model="adresse_domic">
                            @error('adresse_domic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="majles">Majles</label>
                            <input type="text" id="majles" class="form-control" wire:model="majles">
                            @error('majles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="fonction">Fonction</label>
                            <input type="text" id="fonction" class="form-control" wire:model="fonction">
                            @error('fonction')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="sexe">Sexe</label>
                            <select id="sexe" class="form-control" wire:model="sexe">
                                <option value="">-- Sélectionnez --</option>
                                <option value="homme">{{__("homme")}}</option>
                                <option value="famme">{{__("famme")}}</option>
                            </select>
                            @error('sexe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="depot">Dépot</label>
                            <input type="text" id="depot" class="form-control" wire:model="depot">
                            @error('depot')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="mutation">Mutation</label>
                            <input type="text" id="mutation" class="form-control" wire:model="mutation">
                            @error('mutation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="date_capa">Date Capa</label>
                            <input type="date" id="date_capa" class="form-control" wire:model="date_capa">
                            @error('date_capa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="ex_proff">Ex Profession</label>
                            <input type="text" id="ex_proff" class="form-control" wire:model="ex_proff">
                            @error('ex_proff')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="scotab">Scotab</label>
                            <input type="text" id="scotab" class="form-control" wire:model="scotab">
                            @error('scotab')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 mt-3">
                            <label for="sit_prof">Situation Professionnelle</label>
                            <input type="text" id="sit_prof" class="form-control" wire:model="sit_prof">
                            @error('sit_prof') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="date_reglement">Date de Règlement</label>
                            <input type="date" id="date_reglement" class="form-control" wire:model="date_reglement">
                            @error('date_reglement') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="datcosup">Datcosup</label>
                            <input type="date" id="datcosup" class="form-control" wire:model="datcosup">
                            @error('datcosup') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="lieu_nais_arb">Lieu Naissance (Arabe)</label>
                            <input type="text" id="lieu_nais_arb" class="form-control" wire:model="lieu_nais_arb">
                            @error('lieu_nais_arb') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="lieu_nais_fr">Lieu Naissance (Français)</label>
                            <input type="text" id="lieu_nais_fr" class="form-control" wire:model="lieu_nais_fr">
                            @error('lieu_nais_fr') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="willaya_nais_fr">Willaya Naissance (Français)</label>
                            <input type="text" id="willaya_nais_fr" class="form-control" wire:model="willaya_nais_fr">
                            @error('willaya_nais_fr') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="fin_carte_prof">Fin Carte Professionnelle</label>
                            <input type="date" id="fin_carte_prof" class="form-control" wire:model="fin_carte_prof">
                            @error('fin_carte_prof') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="tel">Téléphone</label>
                            <input type="text" id="tel" class="form-control" wire:model="tel">
                            @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="fax">Fax</label>
                            <input type="text" id="fax" class="form-control" wire:model="fax">
                            @error('fax') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="mob">Mobile</label>
                            <input type="text" id="mob" class="form-control" wire:model="mob">
                            @error('mob') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-3 mt-3">
                            <label for="num_act_nais">Numéro Acte de Naissance</label>
                            <input type="text" id="num_act_nais" class="form-control" wire:model="num_act_nais">
                            @error('num_act_nais') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="nom_pere">Nom du Père</label>
                            <input type="text" id="nom_pere" class="form-control" wire:model="nom_pere">
                            @error('nom_pere') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-3 mt-3">
                            <label for="nom_mere">Nom de la Mère</label>
                            <input type="text" id="nom_mere" class="form-control" wire:model="nom_mere">
                            @error('nom_mere') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="resetForm">Annuler</button>
                        <button type="submit"
                            class="btn btn-primary">{{ $isEditing ? 'Mettre à jour' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uplad_lawyer" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true"
        wire:ignore.self>
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
                                                Override your input files with style. Your so fresh input file — Default
                                                version.
                                            </p>
                                            <input type="file" wire:model="excelFile" id="excelFile"
                                                class="form-control">
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
        @this.call('resetForm');
        $('#newModal').modal('hide');
        $('#uplad_lawyer').modal('hide');
    });
</script>


<script>
    window.addEventListener('swal', event => {

        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            iconColor: event.detail.iconColor,
            timer: 3000,
            position: 'center-center',
            showConfirmButton: false,
        });

    });
</script>
