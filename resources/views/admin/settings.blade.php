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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                            <li class="breadcrumb-item active">Settings</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" 
                                action="{{route('admin.settings')}}">
                                @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phoneNo" id="phoneNo" value="{{ $set->phoneNo }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Contact Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" id="email" value="{{ $set->email }}"  class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Bitcoin Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="bitcoinAddress" id="bitcoinAddress" value="{{ $set->bitcoinAddress }}"  
                                            class="form-control form-control-line" >
                                        </div>
                                    </div><div class="form-group">
                                        <label for="example-email" class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" id="address" value="{{ $set->address }}"  
                                            class="form-control form-control-line" >
                                        </div>
                                    </div><div class="form-group">
                                        <label for="example-email" class="col-md-12">FAQ</label>
                                        <div class="col-md-12">
                                            <textarea type="text" rows="10" name="faq" id="faq" 
                                            class="form-control" >{{ $set->faq }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success btn-block" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
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
        <script>
            window.addEventListener('load',function(){
                console.log('loaded');
                $('#faq').wysihtml5();
            })
        </script>
@endsection
