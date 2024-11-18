@extends('avocat.layouts.app')

@section('title', __('Mes demandes'))

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Mes demandes') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="">{{ __('Modifier une demande') }}</h1>

                            <form action="{{ route('demandes.update', $demandeServAgrement->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <select id="type-agrement" name="type_agrement_id" class="form-select @error('type_agrement_id') is-invalid @enderror border border-secondary" placeholder="Type de demande (de stage, levé de stage, agrément, visa ...ect)">
                                          <option value="" selected>{{ __('Type de demande (de stage, levé de stage, agrément, visa ...ect)') }}</option>
                                          @foreach ($typeAgrements as $typeAgrement )
                                            <option value="{{ $typeAgrement->id }}"
                                                {{ $demandeServAgrement->type_agrement_id == $typeAgrement->id ? 'selected' : '' }}>
                                                {{ $typeAgrement->nom_fr }}
                                            </option>
                                          @endforeach
                                        </select>
                                        @error('type_agrement_id')
                                            <span class="alert alert-danger " role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($demandeServAgrement->dossier as $item)
                                        <div class="col-md-4 mb-3">
                                            <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                                            <input type="text" name="titre_fichers[]" id="titre-ficher" class="form-control @error('titre_fichers') is-invalid @enderror border"  value="{{ $item->documents['titre'] }}" >
                                            @error('titre_fichers')
                                                <span class="alert alert-danger " role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                                            <input type="file" name="fichers[]"  id="ficher" class="form-control border @error('fichers') is-invalid @enderror border" >
                                            @error('fichers')
                                                <span class="alert alert-danger " role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3" style="margin-top: 5px;">
                                            <button type="button" class="btn btn-outline-success mt-3" id="ajouter-row-ficher">
                                                {{ __('Ajouter') }}
                                            </button>
                                            <a href="{{ route('dossier.modifier',$item->id)}}" class="btn btn-outline-warning mt-3">
                                                {{ __('Modifier') }}
                                            </a>
                                            <button type="button" class="btn btn-outline-danger delete-dossier mt-3" data-id="{{ $item->id }}">
                                                {{ __('Supprimer') }}
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="container-row"></div>
                                <div class="col-12 text-end">
                                  <button type="submit" class="btn btn-primary px-5">{{ __('Savegarder') }}</button>
                                  <button type="submit" class="btn btn-primary px-5">{{ __('Valider') }}</button>
                                </div>
                            </form><!-- end form-->
                            @include('avocat.demandes.delete-dossier')
                        </div><!-- end card body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div><!-- end row-->

        </div> <!-- container -->

    </div>
@endsection



@section('customcss')
    <style>





    </style>
@endsection


@section('custom_script')
    <script>
        $(document).ready(function() {
            $("#basic-datatable").DataTable({
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
    <script>
        // ** start ajouter row ficher

        $(document).on('click', '#ajouter-row-ficher', function() {
            let ajouterRowFicher = `
                <div class="row container-row">
                    <div class="col-md-5 mb-3">
                        <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                        <input type="text" name="titre_fichers[]" id="titre-ficher" class="form-control border border-secondary" placeholder="Enter le titre de ficher" required>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                        <input type="file" name="fichers[]"  id="ficher" class="form-control border border-secondary" required>
                    </div>
                    <div class="col-md-2 mb-3" style="margin-top: 5px;">
                        <button type="button" class="btn btn-outline-danger mt-3 supprimer-row-ficher" id="supprimer-row-ficher">{{ __('Supprimer') }}</button>
                    </div>
                </div>
            `;
            $('#container-row').append(ajouterRowFicher);
        });

        $(document).on('click', '.supprimer-row-ficher', function() {
          $(this).closest('.container-row').remove();
        });
        // ** end ajouter row ficher
        $(document).ready(function() {
            let deleteId;

            $('.delete-dossier').on('click', function() {
                deleteId = $(this).data('id');
                $('#modalDeleteDossier').modal('show');
            });

            $('#confirmDeleteDossier').on('click', function() {
                $.ajax({
                    url: '/dossier/'+ deleteId +'/supprime' ,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#modalDeleteDossier').modal('hide');
                        $('#row-' + deleteId).remove();
                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            });
        });


    </script>
@endsection
