@extends('layouts.dashboard')
@section('nav')
@include('sections.navadmin')
@endsection
@section('content')

<main class="content">
    <div class="container-fluid p-0">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Admin</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Traders</a></li>
                            <li class="breadcrumb-item active">Traders</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a  class="btn waves-effect waves-light btn btn-info pull-right" href="{{route('admin.traders.new')}}"> Add New Trader</a> 
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Traders</h4>
                                <h6 class="card-subtitle">View and edit trader accounts</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Origin</th>
                                                <th>DOB</th>
                                                <th>Address</th>
                                                <th>Verification</th>
                                                <th>Trading Level</th>
                                                <th>Ranking</th>
                                                <th>Returns</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($traders as $trader)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset("public/storage/$trader->profileUrl") }}" 
                                                    style="max-width: 20px;" class="img-circle img-responsive"/></td>
                                                    <td>{{ $trader->name }}</td>
                                                <td>{{ $trader->origin }}</td>
                                                <td>{{ $trader->country }}</td>
                                                <td>{{ $trader->dob }}</td>
                                                <td>{{ $trader->address }}</td>
                                                <td>{{ $trader->verification }}</td>
                                                <td>{{ $trader->tradingLevel }}</td>
                                                <td>{{ $trader->ranking }}</td>
                                                <td>{{$trader->returns }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit.traders',['id'=>$trader->id]) }}" class="btn btn-success">Edit Trader</a>
                                                 </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div></main>
@endsection
