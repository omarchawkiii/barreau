@extends('avocat.layouts.app')
@section('content')



<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Mes informations</h4>
                </div>
            </div>
        </div>

        <div class="row">
     <div class="col-12">
<div class="card">
<div class="card-body row">
<div class="row">
<div class="col-6">
<div class="blocka">
 <div class="row">
     <div class="col-4"> <img src="{{ asset('/assets/admin/assets/images/users/user-5')}}.jpg" alt="user-image" class="img-p"></div>
     <div class="col-8 des1">
<p><span>Code : </span>A 001245 </p>
<p><span>Statu : </span><span class="v">Actif</span> </p>
<p><span>Grade : </span><span class="v">Cours suprème</span> </p>
<p><span>Nom Prénom FR : </span>Lorem Ipson</p>
<p><span>Nom Prénom AR : </span>Ipson Doloris</p>
</div></div></div>
<div class="blocka">
 <div class="row  des">
<p><span>Scotab : </span>15/02/2001</p>
<p><span>Situation professionnel : </span>15/02/2001</p>

<p><span>Date réglement : </span>15/02/2001</p>
<p><span>Date cours suprème : </span>15/02/2021</p>
<p><span>Majles : </span>Lorem</p>
<p><span>Fonction : </span>Lorem</p>
<p><span>Fin carte professionnelle : </span>15/02/2025</p>

<p><span>Tel : </span>0xx xxx xxx xx</p>
<p><span>Mobile : </span>0xx xxx xxx xx</p>
<p><span>Fax : </span>0xx xxx xxx xx</p>
<p><span>Mail : </span>xx xxx xxx xx</p>
<p><span>N° d'acte de naissance : </span>0123456</p>
<p><span>Nom pére : </span>Lorem</p>
<p><span>Nom mére : </span>Lorem doloris</p></div></div>
</div>
<div class="col-6 des">
<div class="blocka">
 <div class="row">

<p><span>Date de naissance : </span>15/02/1990</p>
<p><span>Lieu de naissance : </span>Alger </p>
<p><span>Lieu de naissance Ar : </span>Alger </p>
<p><span>Adresse  : </span>Lorem ipson doloris 14578, Alger, Algérie</p>
<p><span>Adresse Ar : </span>Lorem ipson doloris 14578, Alger, Algérie</p>
<p><span>Date de sérment : </span>15/02/2000</p>
<p><span>Lieu de sérment : </span>Alger </p>
<p><span>Sexe : </span>Homme</p>


<p><span>Adresse professionnelle : </span>Lorem ipson doloris 14578, Alger, Algérie</p>
<p><span>Adresse professionnelle Ar : </span>Lorem ipson doloris 14578, Alger, Algérie</p>
<p><span>Wilaya : </span>Alger </p>
<p><span>Wilaya Ar : </span>Alger </p>
<p><span>Commune : </span>Alger </p>
<p><span>Commune Ar : </span>Alger </p>

<p><span>Fin de contrat local : </span>15/03/2025 </p>
<p><span>Date d'expiration de carte : </span>15/03/2025 </p>
<p><span>Dépot : </span>15/02/2001</p>
<p><span>Mutation : </span>15/02/2001</p>

<p><span>Date capa : </span>15/01/2001</p>
<p><span>Ex profession : </span>-</p>






    </div>
</div></div></div>

</div>
</div>




</div>
        </div>
        <!-- end row-->



 

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
