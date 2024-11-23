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
                        <div class="card-body">
                            <h1>{{ __('Détails stagiare') }}</h1>
                            <a href="{{ route('avocat.stagiaire.ajouter')}}" class="btn btn-primary my-2">
                                {{ __('Ajouter une stagiaire') }}
                            </a>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nom prénom</th>
                                        <th>Session</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Adresse</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>

                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>2024</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>2023</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-success">Encours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>2022</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>2021</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>2020</td>
                                        <td>(+213) 5 50403020</td>
                                        <td>jobs@gmail.com</td>
                                        <td>Adresse n01 </td>
                                        <td><span class="badge text-bg-danger">Refusé</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- end card body-->
                    </div><!-- end card -->
                </div><!-- end col-->
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
