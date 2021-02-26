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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Trades</a></li>
                            <li class="breadcrumb-item active">Trades & Withdrawals</li>
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
                    <!-- column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Trades</h4>
                                <h6 class="card-subtitle">View and edit client trades</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client</th>
                                                <th>Amount</th>
                                                <th>Trader</th>
                                                <th>Plan</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trades as $trade)
                                            <tr>
                                                <td>{{ $trade->id }}</td>
                                                <td>{{ $trade->user->name }}</td>
                                                <td>${{ number_format($trade->amount,2,'.',',') }}</td>
                                                <td>
                                                    @php
                                                        $profileUrl = $trade->trader->profileUrl;
                                                    @endphp
                                                    <img src="{{ asset("public/storage/$profileUrl") }}" 
                                                    style="max-width: 20px;" class="img-circle img-responsive"/>
                                                    <br/>{{ $trade->trader->name }}</td>
                                                <td><span class="badge badge-danger">{{ $trade->plan }}</span></td>
                                                <td>24th Nov, 2021</td>
                                                <td>
                                                    <a href="{{ route('admin.edit.trades',['id'=>$trade->id]) }}" class="btn btn-success">Edit Trade</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Withdrawals</h4>
                                <h6 class="card-subtitle">View and edit client withdrawals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client</th>
                                                <th>Amount</th>
                                                <th>Bitcoin Address</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($withdrawals as $withdrawal)
                                            <tr>
                                                <td>{{ $withdrawal->id}}</td>
                                                <td>{{ $withdrawal->user->name }}</td>
                                                <td>${{ number_format($withdrawal->amount,2,'.',',')}}</td>
                                                <td>{{ $withdrawal->bitcoinAddress}}</td>
                                                <td><span class="badge badge-info">{{ $withdrawal->status}}</span></td>
                                                <td>{{ $withdrawal->created_at}}</td>
                                                <td>
                                                    <a href="{{route('admin.edit.withdrawals',['id'=>$withdrawal->id])}}" class="btn btn-success">Edit Withdrawal</a>
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
