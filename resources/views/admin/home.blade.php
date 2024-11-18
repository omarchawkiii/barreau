@extends('admin.layouts.app')
@section('content')



<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-barreau-primary ">
                                    <i class="mdi mdi-upload  font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">600</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Nombre d'avocats</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-barreau-primary ">
                                    <i class="mdi mdi-contacts font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">12778</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Agréments</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-barreau-primary ">
                                    <i class="mdi mdi-account-multiple-outline font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">78945</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Assistances</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-barreau-primary">
                                    <i class="mdi mdi-calendar-today  font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">14578</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Plaintes</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Agréments</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Stages</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Formations</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Plaintes</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-0">Revenue total</h4>

                        <div class="widget-chart text-center" dir="ltr">

                            <div id="total-revenue" class="mt-0" data-colors="#f1556c" style="min-height: 220.7px;">
                                </div>

                            <h5 class="text-muted mt-0">Revenue total d'aujourd'hui</h5>
                            <h2>178000 DA</h2>

                            <p style="display:none;" class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>

                            <div class="row mt-3">
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">En ce moment</p>
                                    <h4><i class="fe-arrow-down text-danger me-1"></i>70000 DA</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Semaine passé</p>
                                    <h4><i class="fe-arrow-up text-success me-1"></i>25600DA</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Mois dérnier</p>
                                    <h4><i class="fe-arrow-down text-danger me-1"></i>15000 DA</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body pb-2">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light">Par jour</button>
                                <button type="button" class="btn btn-xs btn-light">Par semaine</button>
                                <button type="button" class="btn btn-xs btn-secondary">Par mois</button>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Rapport des paiments</h4>

                        <div dir="ltr">
                            <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4" style="min-height: 393px;">
                              </div>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Modifier Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Exporter Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Top 5 Utilisateurs actifs</h4>

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="table-light">
                                    <tr>
                                        <th colspan="2">Profile</th>
                                        <th>Role</th>
                                        <th>Etat</th>
                                        <th>Paiements</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{ asset('/assets/admin/assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">Lorem ipsom</h5>
                                            <p class="mb-0 text-muted"><small>Mombre depuis 2017</small></p>
                                        </td>

                                        <td>
                                             Avocat
                                        </td>

                                        <td>
                                            Actif
                                        </td>

                                        <td>
                                        145789 DA
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{ asset('/assets/admin/assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">Lorem ipsom</h5>
                                            <p class="mb-0 text-muted"><small>Mombre depuis 2017</small></p>
                                        </td>

                                        <td>
                                             Avocat
                                        </td>

                                        <td>
                                            Actif
                                        </td>

                                        <td>
                                        145789 DA
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{ asset('/assets/admin/assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">Lorem ipsom</h5>
                                            <p class="mb-0 text-muted"><small>Mombre depuis 2017</small></p>
                                        </td>

                                        <td>
                                             Avocat
                                        </td>

                                        <td>
                                            Actif
                                        </td>

                                        <td>
                                        145789 DA
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{ asset('/assets/admin/assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">Lorem ipsom</h5>
                                            <p class="mb-0 text-muted"><small>Mombre depuis 2017</small></p>
                                        </td>

                                        <td>
                                             Avocat
                                        </td>

                                        <td>
                                            Actif
                                        </td>

                                        <td>
                                        145789 DA
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{ asset('/assets/admin/assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">Lorem ipsom</h5>
                                            <p class="mb-0 text-muted"><small>Mombre depuis 2017</small></p>
                                        </td>

                                        <td>
                                             Avocat
                                        </td>

                                        <td>
                                            Actif
                                        </td>

                                        <td>
                                        145789 DA
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Historique des paiements</h4>

                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>Préstations</th>
                                        <th>Date</th>
                                        <th>Paiement</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Agrément & carte</h5>
                                        </td>

                                        <td>
                                            15/10/2024
                                        </td>

                                        <td>
                                           6000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">Encours</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Visa</h5>
                                        </td>

                                        <td>
                                           01/10/2024
                                        </td>

                                        <td>
                                            3000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success">Payé</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Carte</h5>
                                        </td>

                                        <td>
                                            01/09/2024
                                        </td>

                                        <td>
                                           4000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success">Payé</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Visa</h5>
                                        </td>

                                        <td>
                                           10/09/2023
                                        </td>

                                        <td>
                                            4000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-danger text-danger">Refusé</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Stage</h5>
                                        </td>

                                        <td>
                                            07/07/2023
                                        </td>

                                        <td>
                                           15000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">Encours</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">Formations</h5>
                                        </td>

                                        <td>
                                           10/11/2024
                                        </td>

                                        <td>
                                           5000 DA
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success">Payé</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div>
@endsection


@section('customcss')
    <style>

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            align-self: flex-start;
        }
        .read-more {
            align-self: flex-end;
        }


        /*   NewsLetter ***/



        .subscription.bg-white {
            background: none;
        }

        .bg-white {
            background-color: #fff!important;
        }

        .subscription.bg-white .subscription-wrapper {
            background: #fff;
        }

        .subscription-wrapper {

            padding: 70px 50px;
            z-index: 1;
            width: 100%;


        }

        .subscription-wrapper {

        }

        .subscription-content {
            -webkit-transform: skewY(-1deg);
            transform: skewY(-1deg);
        }

        h3, .h3 {
            font-size: 30px;
        }

        .flex-fill {
            -ms-flex: 1 1 auto!important;
            flex: 1 1 auto!important;
        }

        .subscription.bg-white .form-control {
            border: 1px solid #ebebeb !important;
        }

        .subscription-wrapper .form-control {
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 45px;
        }

        .subscription-wrapper .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            outline: 0;
            box-shadow: none;
        }











    </style>
@endsection


@section('custom_script')
<script src="{{asset('/assets/admin/assets/js/pages/dashboard-1.init.js')}}"></script>

@endsection
