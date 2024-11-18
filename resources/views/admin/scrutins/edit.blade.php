@extends('admin.layouts.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Modifier vote</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

            
                         <form class="frm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                           

                            <div class="col-md-6">
                                <label>{{ __('Titre') }}</label>
                                <input id="email" type="email" placeholder="{{ __('Titre') }}" class="form-control2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                                 <div class="col-md-6" >
                            <label>{{ __('Nombre de candidats accéptés') }}</label>
                                <input id="password" type="number" min="1" placeholder="{{ __('Nombre de candidats accéptés') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-addon b">
    
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-12">
                          

                            <div class="col-md-4" >
                            <label>{{ __('Date de vote') }}</label>
                                <input id="password" type="date" placeholder="{{ __('Date de vote') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-addon b">
    
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           <div class="col-md-4" >
                            <label>{{ __('Heure début') }}</label>
                                <input id="password" type="time" placeholder="{{ __('Heure début') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-addon b">
    
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                                       <div class="col-md-4" >
                            <label>{{ __('Heure fin') }}</label>
                                <input id="password" type="time" placeholder="{{ __('Heure fin') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-addon b">
    
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                                <div class="col-md-12" >
                            <label>{{ __('Description') }}</label>
                            <textarea id="password" type="date" placeholder="{{ __('Description') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></textarea>
                               
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                    <div class="row">
                            <div class="col-md-12 ">
                                <button id="submit_button" type="submit" class="btnb btnb2 btn-primary">
                                    {{ __('Ajouter') }}
                                </button>

                            
                            </div>
                        </div>
                    </form>
                        </div>

                 

              

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
