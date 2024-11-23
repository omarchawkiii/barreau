@extends('admin.layouts.app')
@section('content')



<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('Demandes (Stage/Agrements/Carts/Visas)') }}</h4>

                    <div class="card">
                        <div class="card-body">
                            <div class="col-2 my-2"><a class="btn btn-primary" href="{{route('admin.demandes.create')}}">{{ __('Ajouter une  demande')}}</a></div>
                            <div class="table-responsive">
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Nom Prenom') }}</th>
                                            <th>{{ __('Type')}}</th>
                                            <th>{{ __('Date')}}</th>
                                            <th>{{ __('Téléphone')}}</th>
                                            <th>{{ __('Email')}}</th>
                                            <th>{{ __('Status')}}</th>
                                            <th>{{ __('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($demandeServAgrements as $demandeServAgrement)
                                            <tr>
                                                <td>{{ $demandeServAgrement->stagiaire->nomprenomfr }}</td>
                                                <td>{{ $demandeServAgrement->typeAgrement->nom_fr }}</td>
                                                <td>{{ \Carbon\Carbon::parse($demandeServAgrement->depot)->format('Y') }}</td>
                                                <td>{{ $demandeServAgrement->stagiaire->tel }}</td>
                                                <td>{{ $demandeServAgrement->stagiaire->email }}</td>
                                                <td>
                                                    @switch($demandeServAgrement->status)
                                                        @case('encours')
                                                            <button type="button" class="btn btn-none" data-bs-toggle="modal" data-bs-target="#modalStatusDemande-{{$demandeServAgrement->id}}">
                                                                <span class="badge bg-soft-warning text-warning">Encours</span>
                                                            </button>
                                                            @break
                                                        @case('traitee')
                                                            <button type="button" class="btn btn-none" data-bs-toggle="modal" data-bs-target="#modalStatusDemande-{{$demandeServAgrement->id}}">
                                                                <span class="badge bg-soft-primary  text-primary ">Traitée</span>
                                                            </button>
                                                            @break
                                                        @case('payer')
                                                            <button type="button" class="btn btn-none" data-bs-toggle="modal" data-bs-target="#modalStatusDemande-{{$demandeServAgrement->id}}">
                                                                <span class="badge bg-soft-success text-success">A payer</span>
                                                            </button>
                                                            @break
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.demandes.show', $demandeServAgrement->id) }}" class="btn btn-outline-primary">
                                                        <i class="mdi mdi-eye"></i></a>
                                                    </a>
                                                    <a href="{{ route('admin.demandes.edit', $demandeServAgrement->id) }}" class="btn btn-outline-success">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteDemande-{{$demandeServAgrement->id}}">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @include('admin.demandes.delete')
                                            @include('admin.demandes.status')
                                        @endforeach
                                    </tbody>
                                </table><!-- end table-->
                            </div> <!-- end .table-responsive-->
                        </div><!-- end card body-->
                    </div> <!-- end card-->
                </div>
            </div>
        </div><!-- row -->
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

@endsection
