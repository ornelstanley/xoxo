@extends('layouts.dashboard')
@section('nav')
@include('sections.navadmin')
@endsection
@section('content')

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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Trades</a></li>
                            <li class="breadcrumb-item active">Edit Trade</li>
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
                                <form class="form-horizontal form-material" 
                                action="{{ route('admin.edit.trades',['id'=>$trade->id]) }}" method="post">
                                @csrf
                                
                                    <div class="form-group">
                                        <label class="col-md-12">Trader</label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="trader" id="trader">
                                           @foreach ($traders as $trader)
                                               <option value="{{$trader->id}}">{{$trader->name}}</option>
                                           @endforeach</select>
                                        </div>
                                    </div>
                                    <script>
                                        window.onload = function(){
                                            $('#trader').val('{{ $trade->trader_id }}');
                                        }
                                    </script>
                                    <div class="form-group">
                                        <label class="col-md-12">Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" name="amount" id="amount" value="{{$trade->amount}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Plan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="plan" id="plan" value="{{$trade->plan}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Returns</label>
                                        <div class="col-md-12">
                                            <input type="text" name="return" id="return" value="{{$trade->return}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success btn-block">Update</button>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <a href="{{ route('admin.delete.trades',['id'=>$trade->id]) }}" 
                                                class="btn btn-danger btn-block">Delete Trade</a>
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
@endsection
