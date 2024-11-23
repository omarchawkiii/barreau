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
                            <a href="{{ route('avocat.demandes.create')}}" class="btn btn-primary my-2">
                                {{ __('Ajouter une demande') }}
                            </a>
                            <div class="table-responsive">
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
                                                            <span class="badge bg-soft-warning text-warning">Encours</span>
                                                            @break
                                                        @case('traitee')
                                                            <span class="badge bg-soft-primary  text-primary">Traitée</span>
                                                            @break
                                                        @case('payer')
                                                            <span class="badge bg-soft-success text-success">A payer</span>
                                                            @break

                                                    @endswitch
                                                </td>
                                                <td>
                                                    <a href="{{ route('avocat.demandes.show', $demandeServAgrement->id) }}" class="btn btn-outline-primary">
                                                        <i class="mdi mdi-eye"></i></a>
                                                    </a>
                                                    <a href="{{ route('avocat.demandes.edit', $demandeServAgrement->id) }}" class="btn btn-outline-success">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteDemande-{{$demandeServAgrement->id}}">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @include('avocat.demandes.delete')
                                        @endforeach
                                    </tbody>
                                </table><!-- end table-->
                            </div> <!-- end .table-responsive-->
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
