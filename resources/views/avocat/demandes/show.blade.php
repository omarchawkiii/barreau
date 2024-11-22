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
                            <h1 class="">{{ __('Voir une demande') }}</h1>

                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <select id="type-agrement" name="type_agrement_id" class="form-select @error('type_agrement_id') is-invalid @enderror border border-secondary" placeholder="Type de demande (de stage, levé de stage, agrément, visa ...ect)">
                                          <option value="" selected>{{ __('Type de demande (de stage, levé de stage, agrément, visa ...ect)') }}</option>
                                          @foreach ($typeAgrements as $typeAgrement )
                                              <option value="{{ $typeAgrement->id }}"
                                                {{ $demandeServAgrement->type_agrement_id == $typeAgrement->id ? 'selected' : '' }} >
                                                {{ $typeAgrement->nom_fr }}
                                            </option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Titre') }}</th>
                                                <th>{{ __('Line') }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($demandeServAgrement->dossier as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->documents['titre'] }}</td>
                                                    <td><a href="{{ asset($item->documents['nom']) }}" target="_blank" rel="noopener noreferrer">{{ $item->documents['titre'] }}</a></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteDossier-{{$item->id}}">
                                                            supp
                                                        </button>
                                                    </td>
                                                </tr>
                                                @include('avocat.demandes.delete-dossier')
                                            @endforeach
                                        </tbody>
                                    </table> <!-- end table -->
                                </div>
                                <div class="col-12 text-end">
                                  {{-- <button type="submit" class="btn btn-primary px-5">{{ __('Savegarder') }}</button> --}}
                                  <button type="submit" class="btn btn-primary px-5">{{ __('Valider') }}</button>
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
@endsection
