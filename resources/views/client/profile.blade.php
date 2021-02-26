@extends('layouts.dashboard')
@section('nav')
@if (Auth::user()->isPro)
@include('sections.navpro')
@else
@include('sections.nav')
@endif
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
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                    <div class="col-md-6">
                        @if(strtolower(Auth::user()->kycStatus) !== 'verified')
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
                            <div class="alert-message">
                                <strong>KYC needed!</strong> To be able to continue with our service, your 
                                kyc must be verified
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5 ">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <h4 class="card-title m-t-10">{{ Auth::user()->name}}</h4>
                                    <h6 class="card-subtitle">{{ Auth::user()->username}}</h6>
                                 
                                    <div >
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Email:</b>&nbsp;&nbsp;{{ Auth::user()->email}}</li>
                                            <li class="list-group-item"><b>Country:</b>&nbsp;&nbsp;{{ Auth::user()->country}}</li>
                                            <li class="list-group-item"><b>Kyc Status:</b>&nbsp;&nbsp;
                                                @switch(strtolower(Auth::user()->kycStatus))
                                                    @case('verified')
                                                        <span class="badge badge-success">
                                                        @break
                                                    @case('rejected')
                                                        
                                                    <span class="badge badge-danger">
                                                        @break
                                                    @default
                                                        
                                                    <span class="badge badge-dark">
                                                @endswitch
                                                {{ Auth::user()->kycStatus}}</span></li>
                                            <li class="list-group-item"><b>Date Joined:</b>&nbsp;&nbsp;{{ Auth::user()->created_at}}</li>
                                            <li class="list-group-item"><b>Total Invested:</b>&nbsp;&nbsp;{{ Auth::user()->totalInvested}}</li>
                                            <li class="list-group-item"><b>Total Payout:</b>&nbsp;&nbsp;{{ Auth::user()->totalPayout}}</li>
                                            <li class="list-group-item"><b>Referral Code:</b>&nbsp;&nbsp;{{ Auth::user()->referralCode}}</li>
                                            <li class="list-group-item"><b>Referred By:</b>&nbsp;&nbsp;{{ isset($referrer)?$referrer->name:'NA'}}</li>
                                         </ul>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Change Password</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">KYC</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" 
                                    role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="">
                                        <form class="form-horizontal form-material" method="POST">
                                            <input type="hidden" name="_token" value="{{$token}}" /> 
                                            <div class="form-group">
                                                <label class="col-md-12">Old Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="oldPassword" id="oldPassword" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" 
                                                    class="form-control form-control-line"  name="newPassword" id="newPassword" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Confirm New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" 
                                                    class="form-control form-control-line"  name="confirmNewPassword" id="confirmNewPassword" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success btn-block" type="submit" name="form1">Change Password</button>
                                                </div>
                                            </div>
                                        </form></div></div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" 
                                    aria-labelledby="pills-profile-tab">
                                    <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{$token}}" /> 
                                        <div class="form-group">
                                            <label class="col-md-12">ID</label>
                                            <div class="col-md-12">
                                                <input type="file" name="kyc" id="kyc" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-block" type="submit" name="form2">Verify</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                  </div>
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
