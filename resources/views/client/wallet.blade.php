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
                        <h3 class="text-themecolor">Wallet</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Wallet</li>
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
                    <div class="container-fluid pb-3">
<a class="btn btn-light bg-white shadow-sm " id="day" href="{{ route('withdraw') }}" aria-haspopup="true" aria-expanded="false">
    <i class="align-middle mt-n1" data-feather="minus"></i> Withdraw
</a>
  &nbsp;
<a class="btn btn-light bg-white shadow-sm " id="day" href="{{ route('deposit') }}"  aria-haspopup="true" aria-expanded="false">
    <i class="align-middle mt-n1" data-feather="plus"></i> Fund Wallet
</a>
                </div></div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>Wallet Balance</h2>
                                <span class="text-medium">${{ number_format(Auth::user()->balance,2,'.',',') }}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>Pending Deposit</h2>
                                <span class="text-medium">${{ number_format(Auth::user()->pending_deposit,2,'.',',') }}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>Pending Withdrawal</h2>
                                <span class="text-medium">${{ number_format(Auth::user()->pending_withdrawal,2,'.',',') }}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xlg-7 col-md-7 offset-md-2"><div class="card">
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
                                            @foreach ($transactions as $transaction)
                                           <td>{{ $transaction->amount }}</td>
                                           <td><span class="badge badge-dark">{{ $transaction->status }}</span></td>
                                           <td>{{ date('Y-m-d',strtotime($transaction->created_at)) }}</td>
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
