@extends('avocat.layouts.app')

@section('title', __('Mes demandes'))

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Détails de la demande') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="">{{ __('Détails de la demande') }}</h1>
                            <p class="text-success">{{ __('Status dossier valide') }}</p>
                            <form  method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <input type="text" class="form-control " style="pointer-events: none;" value="{{ $demandeServAgrement->typeAgrement->nom_fr }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Titre') }}</th>
                                                <th>{{ __('Line') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($demandeServAgrement->dossier as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->documents['titre'] }}</td>
                                                    <td>
                                                        @php
                                                            $filePath = storage_path('app/public/' . $item->documents['nom']);
                                                            $url = asset('storage/app/public/' . $item->documents['nom']);
                                                        @endphp
                                                        @if(in_array($item->documents['extension'], ['jpg', 'jpeg', 'png', 'gif']))
                                                            {{-- Display image --}}
                                                            <a href="{{ $url }}" target="_blank">
                                                                <img src="{{ $url }}" alt="{{ $item->documents['titre'] }}" style="max-width: 150px;">
                                                            </a>
                                                        @elseif($item->documents['extension'] === 'pdf')
                                                            {{-- Display link to PDF --}}
                                                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">View PDF</a>
                                                        @else
                                                            {{-- Other file types --}}
                                                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">Download {{ $item->documents['titre'] }}</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table> <!-- end table -->
                                </div>
                                <div class="col-12 text-end">
                                  {{-- <button type="submit" class="btn btn-primary px-5">{{ __('Savegarder') }}</button> --}}
                                  <button type="button" class="btn btn-primary px-5">{{ __('Payer') }}</button>
                                </div>
                            </form><!-- end form-->
                        </div><!-- end card body-->
                    </div> <!-- end card -->
                </div> <!-- end col-->
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
@endsection
