@extends('avocat.layouts.app')

@section('title', __('Mes Stagiaires'))

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Mes stagiaires') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h1>{{ __('Détails stagiare') }}</h1>
                        <p class="text-success">{{ __('Status de stagiaire') }}</p>

                        <form action="">
                            
                        </form>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

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
