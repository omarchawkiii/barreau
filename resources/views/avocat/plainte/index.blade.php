@extends('avocat.layouts.app')

@section('title', __('Plaintes'))

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Plaintes') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ __('Détails stagiare') }}</h1>
                            <a href="{{ route('avocat.plainte.deposer')}}" class="btn btn-primary my-2">
                                {{ __('Déposer une plainte') }}
                            </a>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Motifi</th>
                                        <th>Date de depot</th>
                                        <th>Deposant</th>
                                        <th>Champ</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-warning">Encours</span></td>
                                        <td>Voir/Modi/Supp </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-success">Traité</span></td>
                                        <td>Voir/Modi </td>
                                    </tr>
                                    <tr>
                                        <td>Levé de stage</td>
                                        <td>01/01/2023</td>
                                        <td>moi</td>
                                        <td>lorem </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                        <td>Voir/Modi/Supp</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- end card body-->
                    </div> <!-- end card -->
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
