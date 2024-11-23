@extends('avocat.layouts.app')

@section('title', __('Mes demandes'))

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
                        <h4 class="page-title">{{ __('Mes demandes') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="">{{ __('Ajouter une demande') }}</h1>
                            <form action="{{ route('avocat.demandes.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <select id="type-agrement" name="type_agrement_id" class="form-select @error('type_agrement_id') is-invalid @enderror" placeholder="Type de demande (de stage, levé de stage, agrément, visa ...ect)">
                                          <option value="" selected>{{ __('Type de demande (de stage, levé de stage, agrément, visa ...ect)') }}</option>
                                          @foreach ($typeAgrements as $typeAgrement )
                                              <option value="{{ $typeAgrement->id }}">{{ $typeAgrement->nom_fr }}</option>
                                          @endforeach
                                        </select>
                                        @error('type_agrement_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                                        <input type="text" name="titre_fichers[]"  id="titre-ficher" class="form-control @error('titre_fichers') is-invalid @enderror" placeholder="Enter le titre de ficher">
                                        @error('titre_fichers')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                                        <input type="file" name="fichers[]" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf"  id="ficher" class="form-control @error('fichers') is-invalid @enderror" >
                                        @error('fichers')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3" style="margin-top: 5px;">
                                        <button type="button" class="btn btn-outline-success mt-3" id="ajouter-row-ficher">{{ __('Ajouter') }}</button>
                                    </div>
                                </div>

                                <div id="container-row"></div>

                                <div class="col-12 text-end">
                                  <button type="submit" name="action" value="savegarder" class="btn btn-primary px-5">{{ __('Savegarder') }}</button>
                                  <button type="submit" name="action" value="valider" class="btn btn-primary px-5">{{ __('Envoyer') }}</button>
                                </div>
                            </form><!-- end form-->
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
        $(document).on('click', '#ajouter-row-ficher', function() {
            let ajouterRowFicher = `
                <div class="row container-row">
                    <div class="col-md-5 mb-3">
                        <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                        <input type="text" name="titre_fichers[]" id="titre-ficher" class="form-control  @error('titre_fichers') is-invalid @enderror" placeholder="Enter le titre de ficher" required>
                        @error('titre_fichers')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                        <input type="file" name="fichers[]"  id="ficher" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control @error('fichers') is-invalid @enderror" required>
                        @error('fichers')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-3" style="margin-top: 5px;">
                        <button type="button" class="btn btn-outline-danger mt-3 supprimer-row-ficher" id="supprimer-row-ficher">
                            <span class="mdi mdi-trash-can-outline mt-2" style="font-size: 15px;"></span>
                        </button>
                    </div>
                </div>
            `;
            $('#container-row').append(ajouterRowFicher);
        });

        $(document).on('click', '.supprimer-row-ficher', function() {
          $(this).closest('.container-row').remove();
      });
    </script>
@endsection
