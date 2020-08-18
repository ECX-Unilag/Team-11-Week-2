@extends('layouts.admin_sidebar')
@section('content')
@isset ($message)
    {{$message}}
@endif
<div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">ECX</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Registered Student</h5>
                                    </div>
                                    <h3 class="mt-4">{{ $applicant_no }}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Transactions</h5>
                                    </div>
                                    <h3 class="mt-4">&#8358; 73,265</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Registered Admin</h5>
                                    </div>
                                    <h3 class="mt-4">{{ $admin_no }}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-buffer bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Admitted Student</h5>
                                    </div>
                                    <h3 class="mt-4">{{ $admitted_no }}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- <div class="col-xl-8">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title mb-4">Area Chart</h4>

                                    <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                                </div>
                            </div>
                        </div> -->
                        <!-- end col -->

                        <!-- <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Donut Chart</h4>

                                    <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                                </div>
                            </div>
                        </div> -->
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                            <!-- END ROW -->

                </div>
@endsection