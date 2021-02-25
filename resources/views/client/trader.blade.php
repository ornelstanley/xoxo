@extends('layouts.dashboard')
@section('nav')
@if (Auth::user()->isPro)
@include('sections.navpro')
@else
@include('sections.nav')
@endif
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
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Trader Profile</li>
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
                
        <div class="row box">
             <!-- Column -->
             <div class="col-lg-4 col-xlg-3 col-md-5 ">
                <div class="card">
                    <div class="card-body">
                        @php
                            $profileUrl = Auth::user()->trader->profileUrl;
                        @endphp
                        <center class="m-t-30"> <img class="img-responsive img-circle img-thumbnail" 
                            src="{{ asset("public/storage/$profileUrl") }}" />
                            <div>
                                <i class="fa fa-whatsapp"></i><a href="{{ Auth::user()->trader->contactLink}}" >Chat With Trader</a>
                            </div>
                            <div>
                                <a href="#faqModal" data-toggle="modal">FAQ</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
             <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Trading Stats</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" 
                            role="tabpanel" aria-labelledby="pills-home-tab">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <b>Name:</b><span>{{Auth::user()->trader->name}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Origin:</b><span>{{Auth::user()->trader->origin}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>DOB:</b><span>{{date('Y-m-d',strtotime(Auth::user()->trader->dob))}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Address:</b><span>{{Auth::user()->trader->address}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Verification:</b><span>{{Auth::user()->trader->verification}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Trading Level:</b><span>{{Auth::user()->trader->tradingLevel}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Returns:</b><span>{{ Auth::user()->trader->returns }}</span>
                                </li>
                            </ul></div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" 
                            aria-labelledby="pills-profile-tab">
                            <h4>Trading Statistics</h4>
                            <h6>The statistics of trader({{Auth::user()->trader->uid}}) for the past 12 months</h6>
                            <table class="table thead-dark">
                            <thead>
                                <tr>
                                <th>Month</th><th>Returns</th><th>Trading Level</th><th>Rank</th>    
                                </tr>
                            </thead> 
                            <tbody>
                            <tr><td>{{ Auth::user()->trader->janName }}</td><td>{{ Auth::user()->trader->janReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->febName }}</td><td>{{ Auth::user()->trader->febReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->marName }}</td><td>{{ Auth::user()->trader->marReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->aprName }}</td><td>{{ Auth::user()->trader->aprReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td>
                            </tr>    <tr><td>{{ Auth::user()->trader->mayName }}</td><td>{{ Auth::user()->trader->mayReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->junName }}</td><td>{{ Auth::user()->trader->junReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->julName }}</td><td>{{ Auth::user()->trader->julReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->augName }}</td><td>{{ Auth::user()->trader->augReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->sepName }}</td><td>{{ Auth::user()->trader->sepReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->octName }}</td><td>{{ Auth::user()->trader->octReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->novName }}</td><td>{{ Auth::user()->trader->novReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    <tr><td>{{ Auth::user()->trader->decName }}</td><td>{{ Auth::user()->trader->decReturns}}</td>
                            <td>{{Auth::user()->trader->tradingLevel}}</td><td>#{{Auth::user()->trader->ranking}}</td></tr>    
                            </tbody>   
                            </table></div>
                          </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            </div>
            <div class="row">
                    <div class="col-md-12"><div class="card">
                            <div class="card-body">
                        <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Amount</th>
                                                <th>Return</th>
                                                <th>Plan</th>
                                                <th>Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trades as $trade)
                                           <td>{{ $trade->amount }}</td>
                                           <td><span class="">{{ $trade->return }}</span></td>
                                           <td><span class="badge badge-dark">{{ $trade->plan }}</span></td>
                                           <td>{{ date('Y-m-d',strtotime($trade->created_at)) }}</td>
                                           </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div></div></div></div>
                            
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
