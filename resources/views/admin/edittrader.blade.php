@extends('layouts.dashboard')
@section('nav')
@include('sections.navadmin')
@endsection
@section('content')
@php
    $token = csrf_token();
@endphp

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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Trader</a></li>
                            <li class="breadcrumb-item active">Edit Trader</li>
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
                    <div class="col-lg-6 col-xlg-5 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                    <div class="">
                                        <form class="form-horizontal form-material" method="post" 
                                        action="{{ route('admin.edit.traders',['id'=>$trader->id]) }}" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{$token}}" /> <div class="form-group">
                                                <label class="col-md-12">Profile Photo</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="profile" id="profile" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" id="name" value="{{$trader->name}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Origin</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="origin" id="origin" value="{{$trader->origin}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">DOB</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="dob" id="dob" value="{{ date('m/d/Y',strtotime($trader->dob))}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="address" id="address" value="{{$trader->address}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Verification</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="verification" id="verification" value="{{$trader->verification}}" class="form-control form-control-line">
                                                </div>
                                            </div>  <div class="form-group">
                                                <label class="col-md-12">Trading Level</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="tradingLevel" id="tradingLevel" value="{{$trader->tradingLevel}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Returns</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="returns" id="returns" value="{{$trader->returns}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Last Week Returns</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="lastWeekReturn" id="lastWeekReturn" value="{{$trader->lastWeekReturn}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Ranking</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="ranking" id="ranking" value="{{$trader->ranking}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Expertise</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="expertise" id="expertise" value="{{$trader->expertise}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contact Link(Whatsapp Link)</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="contactLink" id="contactLink" value="{{$trader->contactLink}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="phoneNo" id="phoneNo" value="{{$trader->phoneNo}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Trader ID</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="uid" id="uid" value="{{$trader->uid}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Report Document</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="traderReport" id="traderReport" 
                                                    class="form-control form-control-line">
                                                </div>
                                                @if($trader->traderReport != null)	
                                                
                                                        <a href="{{ asset("public/storage/$trader->traderReport") }}"  
                                                            class="btn btn-primary btn-block" target="_blank">View</a>
                                                    
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Report Month</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="reportMonth" id="reportMonth" 
                                                    value="{{$trader->reportMonth}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Total Clients</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="totalClients" id="totalClients" 
                                                    value="{{$trader->totalClients}}" class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Total Trading Volume</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="totalTradingVolume" id="totalTradingVolume" 
                                                    value="{{$trader->totalTradingVolume}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Total Trading Volume Date</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="totalTradingVolumeDate" id="totalTradingVolumeDate" 
                                                    value="{{$trader->totalTradingVolumeDate}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Total Turnover</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="totalTurnover" id="totalTurnover" 
                                                    value="{{$trader->totalTurnover}}" class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Total Turnover Date</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="totalTurnoverDate" id="totalTurnoverDate" 
                                                    value="{{$trader->totalTurnoverDate}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success btn-block"  type="submit" name="form1">Update</button>
                                                </div>
                                            </div><div class="form-group">
                                                <div class="col-sm-12">
                                                    <a href="{{ route('admin.delete.traders',['id'=>$trader->id]) }}" class="btn btn-danger btn-block">Delete</a>
                                                </div>
                                            </div>
                                        </form></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-6 col-xlg-5 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                    <div class="">
                                        <form class="form-horizontal form-material" method="post" 
                                        id="form" action="{{ route('admin.edit.traders',['id'=>$trader->id]) }}">
                                            <input type="hidden" name="_token" value="{{$token}}" />
                                            <input type="hidden" name="hastype" id="hastype" value="1" />
                                            <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>Returns</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td>
                                                      <input type="text" name="janName" id="janName" value="{{$trader->janName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="janReturns" id="janReturns" value="{{$trader->janReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                       <input type="text" name="febName" id="febName" value="{{$trader->febName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="febReturns" id="febReturns" value="{{$trader->febReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                       <input type="text" name="marName" id="marName" value="{{$trader->marName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="marReturns" id="marReturns" value="{{$trader->marReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                      <input type="text" name="aprName" id="aprName" value="{{$trader->aprName}}" class="form-control form-control-line"> </td>
                                                        <td><input type="text" name="aprReturns" id="aprReturns" value="{{$trader->aprReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                       <input type="text" name="mayName" id="mayName" value="{{$trader->mayName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="mayReturns" id="mayReturns" value="{{$trader->mayReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                       <input type="text" name="junName" id="junName" value="{{$trader->junName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="junReturns" id="junReturns" value="{{$trader->junReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                       <input type="text" name="julName" id="julName" value="{{$trader->julName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="julReturns" id="julReturns" value="{{$trader->julReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                      <input type="text" name="augName" id="augName" value="{{$trader->augName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="augReturns" id="augReturns" value="{{$trader->augReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                     <input type="text" name="sepName" id="sepName" value="{{$trader->sepName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="sepReturns" id="sepReturns" value="{{$trader->sepReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                     <input type="text" name="octName" id="octName" value="{{$trader->octName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="octReturns" id="octReturns" value="{{$trader->octReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                      <input type="text" name="novName" id="novName" value="{{$trader->novName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="novReturns" id="novReturns" value="{{$trader->novReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                    <tr><td>
                                                      <input type="text" name="decName" id="decName" value="{{$trader->decName}}" class="form-control form-control-line"></td>
                                                        <td><input type="text" name="decReturns" id="decReturns" value="{{$trader->decReturns}}" class="form-control form-control-line">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-block" type="submit" name="form2">Update</button>
                                            </div>
                                        </div>
                                        </form></div>
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

@section('footer')

<script>
    document.addEventListener("DOMContentLoaded", function() {
$("input[name=\"dob\"]").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true
});
    });
    </script>
@endsection
