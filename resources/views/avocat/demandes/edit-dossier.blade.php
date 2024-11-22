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
                            <h1 class="">{{ __('Modifier une dossier') }}</h1>

                            <form action="{{ route('dossier.update', $dosser->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="titre-ficher" class="form-label">{{ __('Titre de Ficher') }}</label>
                                            <input type="text" name="titre_ficher" id="titre-ficher" class="form-control @error('titre_ficher') is-invalid @enderror border border-secondary" value="{{ $dosser->documents['titre'] }}" required>
                                            @error('titre_ficher')
                                                <span class="alert alert-danger " role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ficher" class="form-label">{{ __('Ficher') }}</label>
                                            <input type="file" name="ficher"  id="ficher" class="form-control border @error('ficher') is-invalid @enderror border-secondary" required>
                                            @error('ficher')
                                                <span class="alert alert-danger " role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-end mt-3">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Annulée')}}</button>
                                    <button type="submit" class="btn btn-warning">{{ __('Modifier') }}</button>
                                </div>
                            </form>
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

    </script>
@endsection
