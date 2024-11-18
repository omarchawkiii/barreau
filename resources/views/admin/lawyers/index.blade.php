@extends('admin.layouts.app')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <livewire:import-lawyer />
            </div>
        </div>

    </div> <!-- container -->

</div>
@endsection

@section('custom_script')
    <!-- Plugins js -->
    <script src="{{asset('/assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('/assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('/assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

@endsection

@section('customcss')
    <!-- Plugins css -->
    <link href="{{asset('/assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
