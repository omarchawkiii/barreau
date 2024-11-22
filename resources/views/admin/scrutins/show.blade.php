@extends('admin.layouts.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Eléction batonnier</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
<div class="row">

<div class="col-4">
<script type="text/javascript">
    // Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2025 08:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "<span>J </span>" + hours + "<span>h </span>"
  + minutes + "<span>m </span>" + seconds + "<span>s </span>";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Expiré";
  }
}, 1000);
</script>
    <p id="demo"></p>
</div>

<div class="col-8">
  <div class="row">
<div class="col-4"><div class="blockes">Candidats</div></div>
<div class="col-4"><div class="blockes">Etat</div></div>
<div class="col-4"><div class="blockes">Session</div></div>
  </div>  
  <div class="row">
<div class="col-4"><div class="blockes">16</div></div>
<div class="col-4"><div class="blockes">Encours</div></div>
<div class="col-4"><div class="blockes">2024/2025</div></div>
  </div>  
</div>           


                        </div> <!-- end card body-->
<div class="row">
    <h3 class="tit">Les candidats</h3>
<div class="table-responsive">
                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                <thead class="table-light">
                                    <tr>
                                        <th colspan="2">Nom prénom</th>
                                        <th>Grade</th>
                                        <th>Ordre</th>
                                        <th>Nombre de vote</th>
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
                                            1
                                        </td>

                                        <td>
                                        74
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
                                            2
                                        </td>

                                        <td>
                                        64
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
                                            3
                                        </td>

                                        <td>
                                        54
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
                                            4
                                        </td>

                                        <td>
                                        44
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
                                            5
                                        </td>

                                        <td>
                                        34
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
                                            6
                                        </td>

                                        <td>
                                        24
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
                                            7
                                        </td>

                                        <td>
                                        14
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
</div>
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
