@extends('admin.layouts.app')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    @php
                        toastr()->error($error);
                    @endphp
                @endforeach
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Demandes') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="">{{ __('Modifier une demande') }}</h1>

                            <form action="{{ route('admin.demandes.update', $demandeServAgrement->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="stagiaire_id" class="form-label">{{ __('Nom Prenom Stagiaire') }}</label>
                                        <input type="text" id="stagiaire_id" class="form-control" style="pointer-events: none;" value="{{ $demandeServAgrement->stagiaire->nomprenomfr }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <select id="type-agrement" name="type_agrement_id" class="form-select @error('type_agrement_id') is-invalid @enderror" placeholder="Type de demande (de stage, levé de stage, agrément, visa ...ect)">
                                          <option value="" selected>{{ __('Type de demande (de stage, levé de stage, agrément, visa ...ect)') }}</option>
                                          @foreach ($typeAgrements as $typeAgrement )
                                            <option value="{{ $typeAgrement->id }}"
                                                {{ $demandeServAgrement->type_agrement_id == $typeAgrement->id ? 'selected' : '' }}>
                                                {{ $typeAgrement->nom_fr }}
                                            </option>
                                          @endforeach
                                        </select>
                                        @error('type_agrement_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    @foreach ($demandeServAgrement->dossier as $item)
                                        <div id="row-delete-{{ $item->id }}" class="row">
                                            <div class="col-md-5 mb-1">
                                                <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                                                <input type="text"  id="titre-ficher" class="form-control" style="pointer-events: none;" value="{{ $item->documents['titre'] }}" />
                                            </div>
                                            <div class="col-md-5 mb-1">
                                                <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                                                <input type="file"  id="ficher" class="form-control" style="pointer-events: none;" disabled />
                                                @php
                                                    $filePath = storage_path('app/public/' . $item->documents['nom']);
                                                    $url = asset('storage/app/public/' . $item->documents['nom']);
                                                @endphp
                                                @if(in_array($item->documents['extension'], ['jpg', 'jpeg', 'png', 'gif']))
                                                    {{-- Display image --}}
                                                    <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">{{__('Voir le Photo') }}</a>
                                                @elseif($item->documents['extension'] === 'pdf')
                                                    {{-- Display link to PDF --}}
                                                    <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">{{__('Voir le PDF') }}</a>
                                                @else
                                                    {{-- Other file types --}}
                                                    <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">{{__('Télécharge') }} {{ $item->documents['titre'] }}</a>
                                                @endif
                                            </div>
                                            @if (count($demandeServAgrement->dossier) == 1)
                                                <div class="col-md-2 mb-1" style="margin-top: 5px;">
                                                    <button type="button" class="btn btn-outline-warning edit-dossier mt-3" data-id="{{ $item->id }}">
                                                        <span class="mdi mdi-pencil-box-outline mt-2" style="font-size: 15px;"></span>
                                                        {{-- {{ __('Modifier') }} --}}
                                                    </button>
                                                </div>
                                            @else
                                                <div class="col-md-2 mb-1" style="margin-top: 5px;">
                                                    <button type="button" class="btn btn-outline-warning edit-dossier mt-3" data-id="{{ $item->id }}">
                                                        <span class="mdi mdi-pencil-box-outline mt-2" style="font-size: 15px;"></span>
                                                        {{-- {{ __('Modifier') }} --}}
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger delete-dossier mt-3" data-id="{{ $item->id }}">
                                                        <span class="mdi mdi-trash-can-outline mt-2" style="font-size: 15px;"></span>
                                                        {{-- {{ __('Supprimer') }} --}}
                                                    </button>
                                                </div>
                                            @endif

                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-12" id="container-row"></div>
                                <div >
                                    <button type="button" class="btn btn-success mt-3" id="ajouter-row-ficher">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                                <div class="col-12 text-end">
                                  <button type="submit" name="action" value="savegarder" id="savegarder" class="btn btn-primary px-5">{{ __('Savegarder') }}</button>
                                </div>
                            </form><!-- end form-->
                            @include('admin.demandes.edit-dossier')
                            @include('admin.demandes.delete-dossier')
                        </div><!-- end card body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div><!-- end row-->

        </div> <!-- container -->

    </div>
@endsection

@section('customcss')
    <style>
        /* Mohamed Dev Style */
        .form-control, .form-select{
            border: solid 1px #B99B5C;
        }
        .form-control:focus, .form-select:focus{
            border: solid 1px #b9a57a;
        }
    </style>
@endsection


@section('custom_script')

    <script>
        var cpt = 0;
        let buttonSavegarder = document.getElementById("savegarder");
        buttonSavegarder.disabled  = true;
        // ** start ajouter row ficher
        $(document).on('click', '#ajouter-row-ficher', function() {
            cpt++;
            let ajouterRowFicher = `
                <div class="row container-row-delete">
                    <div class="col-md-5 mb-1">
                        <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                        <input type="text" name="titre_fichers[]" id="titre-ficher" class="form-control  @error('titre_fichers') is-invalid @enderror" placeholder="Enter le titre de ficher" required>
                        @error('titre_fichers')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-1">
                        <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                        <input type="file" name="fichers[]"  id="ficher" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control @error('fichers') is-invalid @enderror" required>
                        @error('fichers')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-1" style="margin-top: 5px;">
                        <button type="button" class="btn btn-outline-danger mt-3 supprimer-row-ficher" id="supprimer-row-ficher">
                            <span class="mdi mdi-trash-can-outline mt-2" style="font-size: 15px;"></span>
                        </button>
                    </div>
                </div>
            `;
            $('#container-row').append(ajouterRowFicher);
            if (cpt > 0) {
                buttonSavegarder.disabled  = false;
            }
        });

        $(document).on('click', '.supprimer-row-ficher', function() {
            cpt--;
          $(this).closest('.container-row-delete').remove();
          if (cpt == 0) {
                buttonSavegarder.disabled  = true;
            }
        });
        // ** end ajouter row ficher
        // ** Start deleted dossier
        $(document).ready(function() {
            let deleteId;

            $('.delete-dossier').on('click', function() {
                deleteId = $(this).data('id');
                var modal = new bootstrap.Modal(document.getElementById('modalDeleteDossier'));
                modal.show();
                // $('#modalDeleteDossier').modal('show');
            });

            $('#confirmDeleteDossier').on('click', function() {

                $.ajax({
                    url: '{{ route('admin.demandes.destroy.dossier', ':deleteId') }}'.replace(':deleteId', deleteId),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status) {
                            // $('#modalDeleteDossier').modal('hide');
                            $('#row-delete-' + deleteId).remove();
                            var modal = new bootstrap.Modal(document.getElementById('modalDeleteDossier'));
                            modal.hide();
                            location.reload();
                        } else {
                            console.log('Error');
                        }

                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            });
        });
        // ** end deleted dossier
        // ** Start Edit dossier
        $(document).ready(function() {
            let editId;

            $('.edit-dossier').on('click', function() {
                editId = $(this).data('id');

                $.ajax({
                    url: '{{ route('admin.demandes.edit.dossier', ':editId') }}'.replace(':editId', editId),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status) {
                            const baseUrl = "{{ asset('storage/app/public/') }}";
                            const documentData = response.data.documents;
                            const documentUrl = `${baseUrl}/${documentData.nom}`;
                            let linkHtml = '';

                            if (['jpg', 'jpeg', 'png', 'gif'].includes(documentData.extension.toLowerCase())) {
                                linkHtml = `<a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="${documentUrl}" target="_blank">Voir la Photo</a>`;
                            } else if (documentData.extension.toLowerCase() === 'pdf') {
                                linkHtml = `<a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="${documentUrl}" target="_blank">Voir le PDF</a>`;
                            } else {
                                linkHtml = `<a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="${documentUrl}" target="_blank">Télécharger ${documentData.titre}</a>`;
                            }

                            $('#input_titre_ficher').val(response.data.documents.titre);
                            $('#documentLinkContainer').html(linkHtml);

                            // $('#modalEditDossier').modal('show');
                            var modal = new bootstrap.Modal(document.getElementById('modalEditDossier'));
                            modal.show();
                        }

                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            });

            $('#submitDoossierUpdate').on('click', function() {

                $('.error-text').text('');
                $('.form-control').removeClass('is-invalid');

                var formData = new FormData($("#updateDossierForm")[0]);

                $.ajax({
                    url: '{{ route('admin.demandes.update.dossier', ':editId') }}'.replace(':editId', editId),
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status) {
                            // alert(response.message);
                            var modal = new bootstrap.Modal(document.getElementById('modalEditDossier'));
                            modal.hide();
                            // $('#modalEditDossier').modal('hide');
                            location.reload();
                        }
                    },
                    error: function(xhr) {
                        // Display validation errors
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            if (errors.titre_ficher) {
                                $('#input_titre_ficher').addClass('is-invalid');
                                $('.titre_ficher_error').text(errors.titre_ficher[0]);
                            }
                            if (errors.ficher) {
                                $('#input_ficher').addClass('is-invalid');
                                $('.ficher_error').text(errors.ficher[0]);
                            }
                        }
                    }
                });
            });
        });
        // ** end Edit dossier
    </script>
@endsection
