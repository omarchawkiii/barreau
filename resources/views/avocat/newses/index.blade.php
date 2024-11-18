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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <livewire:cat-news-manager>
                    </div>
                </div>
            </div>
        </div>


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
