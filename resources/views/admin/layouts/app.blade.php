<!DOCTYPE html>
<html lang="zxx" ang="en" data-topbar-color="light" data-bs-theme="light" data-layout-mode="default" data-layout-width="default" data-menu-color="light" data-menu-icon="default" data-sidenav-size="default" class="menuitem-active">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

        @livewireStyles

        <title>Tableau de bord | ORDRE DES AVOCATS D’ALGER</title>

        <!-- App favicon -->
        <link rel="stylesheet" href="{{ asset('/assets/admin/assets/css/materialdesignicons.min.css') }}">
        <link rel="shortcut icon" href="{{ asset('/assets/admin/assets/images/favicon.ico') }}">

        <!-- Plugins css -->
        <link href="{{ asset('/assets/admin/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ asset('/assets/admin/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="{{ asset('/assets/admin/assets/js/head.js')}}"></script>


        <link href="{{ asset('/assets/admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Bootstrap css -->
        <link href="{{ asset('/assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- App css -->
        <link href="{{ asset('/assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css" />


        @yield('customcss')
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Menu ========== -->
                @include('admin.partiels.sidebar')
            <!-- ========== Left menu End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- ========== Topbar Start ========== -->
                    @include('admin.partiels.header')
                <!-- ========== Topbar End ========== -->
                <!-- content -->
                    @yield('content')

                <!-- content -->
                <!-- Footer Start -->
                    @include('admin.partiels.footer')
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


        <!-- Vendor js -->
        <script src="{{asset('/assets/admin/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/assets/admin/assets/js/app.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('/assets/admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('/assets/admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('/assets/admin/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="{{asset('/assets/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/assets/admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>

        <!--<script src="{{asset('/public/vendor/livewire/livewire.js?id=38dc8241')}}"></script>-->
        @livewireScripts

        @yield('custom_script')
    </body>

</html>
