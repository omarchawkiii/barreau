@extends('admin.layouts.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Blank Page</h4>
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
                           

                            <div class="col-md-12">
                                <label>{{ __('Username') }}</label>
                                <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-12">
                          

                            <div class="col-md-12" id="show_hide_password">
                            <label>{{ __('Password') }}</label>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-addon b">
        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
      </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 

                        <div class="row">
                            <div class="col-md-12 ">
                                <button id="submit_button" type="submit" class="btnb btnb2 btn-primary">
                                    {{ __('Login') }}
                                </button>

                            
                            </div>
                        </div>
                    </form>

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
