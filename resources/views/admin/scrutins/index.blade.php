@extends('admin.layouts.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Scrutins & sondages</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                         <div class="row">
                <div class="col-2"><a class="btnbar" href="{{ route('scrutins.create') }}">Ajouter vote</a></div>

            </div>
            @php
            $id=1;
            @endphp

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Session</th>
                                        <th>Date de vote</th>
                                        <th>Nombre de candidats</th>
                                        <th>Statu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Eléction batonnier</td>
                                        <td>2024/2025</td>
                                        <td>03/12/2024</td>
                                        <td>16</td>
                                        <td><span class="badge bg-soft-warning text-warning">Encours</span></td>
                                        <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lorem ipson 1</td>
                                        <td>2023/2024</td>
                                        <td>01/12/2023</td>
                                        <td>32</td>
                                        <td><span class="badge bg-soft-success text-success">Fait</span></td>
                                         <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lorem ipson 2</td>
                                        <td>2022/2023</td>
                                        <td>03/12/2022</td>
                                        <td>10</td>
                                        <td><span class="badge bg-soft-danger text-danger">Expiré</span></td>
                                          <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                          <tr>
                                        <td>Eléction batonnier 3</td>
                                        <td>2021/2022</td>
                                        <td>03/12/2021</td>
                                        <td>16</td>
                                        <td><span class="badge bg-soft-warning text-warning">Encours</span></td>
                                        <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lorem ipson 4</td>
                                        <td>2020/2021</td>
                                        <td>01/12/2020</td>
                                        <td>32</td>
                                        <td><span class="badge bg-soft-success text-success">Fait</span></td>
                                         <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lorem ipson 5</td>
                                        <td>2019/2020</td>
                                        <td>03/12/2019</td>
                                        <td>66</td>
                                        <td><span class="badge bg-soft-danger text-danger">Expiré</span></td>
                                          <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                     <tr>
                                        <td>Lorem ipson 5</td>
                                        <td>2018/2019</td>
                                        <td>03/12/2018</td>
                                        <td>13</td>
                                        <td><span class="badge bg-soft-danger text-danger">Expiré</span></td>
                                          <td class="action-icon"><a class="btn btn-xs btn-light" href="{{ route('scrutins.show',$id) }}"><i class="mdi mdi-eye"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.edit',$id) }}"><i class="mdi mdi-pencil"></i></a><a class="btn btn-xs btn-light" href="{{ route('scrutins.destroy',$id) }}"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>

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
