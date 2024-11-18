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
                            <h4 class="header-title">{{ __('Mes demandes') }}</h4>
                            <a href="{{ route('demandes.ajouter')}}" class="btn btn-primary my-2">
                                {{ __('Ajouter une demande') }}
                            </a>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Service</th>
                                        <th>Champ</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demandeServAgrements as $demandeServAgrement)
                                        <tr>
                                            <td>{{ $demandeServAgrement->typeAgrement->nom_fr }}</td>
                                            <td>{{ $demandeServAgrement->depot }}</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                @switch($demandeServAgrement->status)
                                                    @case('encours')
                                                        <span class="badge text-bg-warning">Encours</span>
                                                        @break
                                                    @case('traitee')
                                                        <span class="badge text-bg-secondary">Traitée</span>
                                                        @break
                                                    @case('payer')
                                                        <span class="badge text-bg-success">A payer</span>
                                                        @break

                                                @endswitch
                                            </td>
                                            <td>
                                                <a href="{{ route('demandes.voir', $demandeServAgrement->id) }}" class="btn btn-outline-primary">vair</a>
                                                <a href="{{ route('demandes.modifier', $demandeServAgrement->id) }}" class="btn btn-outline-success">modi</a>
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteDemande-{{$demandeServAgrement->id}}">
                                                    supp
                                                </button>
                                            </td>
                                        </tr>
                                        @include('avocat.demandes.delete')
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

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
