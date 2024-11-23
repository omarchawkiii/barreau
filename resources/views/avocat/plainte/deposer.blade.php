@extends('avocat.layouts.app')

@section('title', __('Déposer plainte'))

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Déposer plainte') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-12">
                                  {{-- <label for="inputState" class="form-label"></label> --}}
                                  <select id="inputState" class="form-select" placeholder="Type de plainte (avocat contre citoyen avocat contre avocat)">
                                    <option selected>{{ __('Type de plainte (avocat contre citoyen avocat contre avocat)') }}</option>
                                    <option value="avocat contre citoyen">Avocat contre Citoyen</option>
                                    <option value="avocat contre avocat">Avocat contre Avocat</option>
                                  </select>
                                </div>

                                <div class="col-md-12">
                                  <input type="file" class="form-control" name="" id="">
                                </div>
                                <div class="col-12 text-end">
                                  <button type="submit" class="btn btn-primary px-5">{{ __('Savegarder') }}</button>
                                  <button type="submit" class="btn btn-primary px-5">{{ __('Valider') }}</button>
                                </div>
                            </form>
                        </div><!-- end card body-->
                    </div> <!-- end card -->
                </div> <!-- end col-->
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
