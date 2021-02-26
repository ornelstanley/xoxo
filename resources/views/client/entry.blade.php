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
                        <h3 class="text-themecolor">Entry</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Entry</li>
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
                    <a class="btn btn-light bg-{{ $set->slotOpen ? 'success' : 'danger' }} shadow-sm text" id="day" href="#" aria-haspopup="true" aria-expanded="false">
                        <i class="align-middle mt-n1" data-feather="user-minus"></i> Slots {{ $set->slotOpen ? 'Open' : 'Closed'}}
                    </a>
                      &nbsp;
                    <a class="btn btn-light bg-white shadow-sm " id="day" href="{{ route('wallet') }}"  aria-haspopup="true" aria-expanded="false">
                        <i class="align-middle mt-n1" data-feather="user-minus"></i>Wallet Balance $ {{ number_format(Auth::user()->balance,2,'.',',') }}
                    </a></div>
                                    </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-6 col-xlg-5 col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <form class="form-horizontal form-material" action="{{route('entry') }}"
                                     method="post">
                                     @csrf
                                     <div class="form-group">
                                        <label for="example-email" class="col-md-12">Entry Level</label>
                                        <div class="col-md-12">
                                           <select class="form-control" name="entryLevel">
                                               <option value="Wait List">Wait List</option>
                                               <option value="Stable">Stable</option>
                                               <option value="Basic">Basic</option>
                                               <option value="Premium">Premium</option>
                                               <option value="Exclusive">Exclusive</option>
                                           </select>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Amount</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="1000" name="amount" id="amount"
                                                class="form-control form-control-line">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-block" 
                                                {{ $set->slotOpen ? '' : 'disabled'}}
                                                type="submit">Join</button>
                                            </div>
                                        </div>
                                    </form></div>
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
                                                <th>Entry</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trades as $trade)
                                            <td>{{ $trade->plan }}</td>
                                           <td>{{ $trade->amount }}</td>
                                           <td><span class="badge badge-dark">{{ $trade->status }}</span></td>
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
