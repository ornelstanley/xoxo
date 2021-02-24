@extends('layouts.dashboard')
@section('nav')
@if (Auth::user()->isPro)
@include('sections.navpro')
@else
@include('sections.nav')
@endif
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
                        <h3 class="text-themecolor">Withdrawal</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Withdraw</li>
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
                                <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bitcoin</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Wire Transfer</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" 
                                    role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="">
                                        <form class="form-horizontal form-material" action="{{route('withdraw') }}"
                                         method="post">
                                         @csrf
                                            <div class="form-group">
                                                <label class="col-md-12">Amount</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="1000" name="amount" id="amount"
                                                    class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Bitcoin Address</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="1eBV8Unm4At0i4MnpLX9FqW0oiP" name="bitcoinAddress" id="bitcoinAddress"
                                                    class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success btn-block" type="submit">Withdraw</button>
                                                </div>
                                            </div>
                                        </form></div></div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" 
                                    aria-labelledby="pills-profile-tab">
                                Contact <a href="mailto:info@fxcmprotraders.com">support</a> and provide your banking details for payout. Include iban, sort code and beneficiary details
                                <br/><a href="mailto:info@fxcmprotraders.com" class="btn btn-block btn-danger">Contact Support</a>
                                </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xlg-5 col-md-6 offset-md-3"><div class="card">
                            <div class="card-body">
                        <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($withdrawals as $withdrawal)
                                           <td>{{ $withdrawal->amount }}</td>
                                           <td><span class="badge badge-dark">{{ $withdrawal->status }}</span></td>
                                           <td>{{ date('Y-m-d',strtotime($withdrawal->created_at)) }}</td>
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
@endsection
