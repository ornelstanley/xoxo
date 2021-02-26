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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Deposits</a></li>
                            <li class="breadcrumb-item active">View Deposits</li>
                        </ol>
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
                    <!-- Column -->
                    <div class="col-lg-6 col-xlg-5 col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" 
                                action="{{route('admin.edit.deposits',['id'=>$deposit->id])}}">
                                @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" name="amount" id="amount" value="{{$deposit->amount}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-md-12">Status</label>
                                        <div class="col-md-12">
                                            <input type="text" name="status" id="status" value="{{$deposit->status}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success btn-block">Update</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <a href="{{route('admin.delete.deposits',['id'=>$deposit->id])}}" 
                                                class="btn btn-danger btn-block">Delete Deposit</a>
                                        </div>
                                    </div>
                                               
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
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
