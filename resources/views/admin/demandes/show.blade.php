@extends('admin.layouts.app')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('Demandes (Stage/Agrements/Carts/Visas)') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="">{{ __('Voir une demande') }}</h1>
                            <form >
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="stagiaire_id" class="form-label">{{ __('Nom Prenom Stagiaire') }}</label>
                                        <input type="text" id="stagiaire_id" class="form-control" style="pointer-events: none;" value="{{ $demandeServAgrement->stagiaire->nomprenomfr }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="type-agrement" class="form-label">{{ __('Type de agrement') }}</label>
                                        <input type="text" class="form-control" id="type-agrement" style="pointer-events: none;" value="{{ $demandeServAgrement->typeAgrement->nom_fr }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Titre') }}</th>
                                                <th>{{ __('Line') }}</th>
                                                <th>{{ __('Action') }}</th>
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
                                                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">{{__('Voir le PDF') }}</a>
                                                        @else
                                                            {{-- Other file types --}}
                                                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ $url }}" target="_blank">{{__('Télécharge') }} {{ $item->documents['titre'] }}</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-danger delete-dossier mt-3" data-id="{{ $item->id }}">
                                                            <span class="mdi mdi-trash-can-outline mt-2" style="font-size: 15px;"></span>
                                                            {{-- {{ __('Supprimer') }} --}}
                                                        </button>
                                                    </td>
                                                </tr>
                                                @include('admin.demandes.delete-dossier')
                                            @endforeach
                                        </tbody>
                                    </table> <!-- end table -->
                                </div>

                            </form><!-- end form-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

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
        // ** Start deleted dossier
        $(document).ready(function() {
            let deleteId;

            $('.delete-dossier').on('click', function() {
                deleteId = $(this).data('id');
                var modal = new bootstrap.Modal(document.getElementById('modalDeleteDossier'));
                modal.show();
                // $('#modalDeleteDossier').modal('show');
            });

            $('#confirmDeleteDossier').on('click', function() {

                $.ajax({
                    url: '{{ route('admin.demandes.destroy.dossier', ':deleteId') }}'.replace(':deleteId', deleteId),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status) {
                            // $('#modalDeleteDossier').modal('hide');
                            $('#row-delete-' + deleteId).remove();
                            var modal = new bootstrap.Modal(document.getElementById('modalDeleteDossier'));
                            modal.hide();
                            location.reload();
                        } else {
                            console.log('Error');
                        }

                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            });
        });
        // ** end deleted dossier
    </script>
@endsection
