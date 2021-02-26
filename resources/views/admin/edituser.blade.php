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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
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
                               
                                    <div class="">
                                        <form class="form-horizontal form-material" method="post" action="{{ route('admin.edit.users',['id'=>$user->id]) }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-md-12">Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->name}}" id="name" name="name" 
                                                    class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->username}}" id="username" name="username" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->email}}" id="email" name="email" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Country</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->country}}" id="country" name="country" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Balance</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->balance}}" id="balance" name="balance" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">KycStatus</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->kycStatus}}" id="kycStatus" name="kycStatus"
                                                     class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Total Invested</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->totalInvested}}" id="totalInvested" name="totalInvested" class="form-control form-control-line">
                                                </div>
                                            </div>  <div class="form-group">
                                                <label class="col-md-12">Total Payout</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$user->totalPayout}}" id="totalPayout" name="totalPayout" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Pro</label>
                                                <div class="col-md-12">
                                                    <input type="checkbox" 
                                                    @if($user->isPro) 
                                                     checked
                                                    @endif
                                                    id="isPro" name="isPro" style="position: inherit !important;;left: 0 !important; opacity: 1 !important;" >
                                                </div>
                                            </div>
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
                                            $('#trader').val('{{ $user->trader_id }}');
                                        }
                                    </script>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success btn-block">Update</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <a class="btn btn-info btn-block" href="{{ route('admin.users.newtrade',['id'=>$id]) }}">New Trade</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <a class="btn btn-danger btn-block" href="{{ route('admin.delete.users',['id'=>$id]) }}">Delete</a>
                                                </div>
                                            </div>
                                        </form></div>
                                        <div>
                                            <img src="{{ asset("storage/$user->kycUrl") }}" class="img-responsive" />
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
