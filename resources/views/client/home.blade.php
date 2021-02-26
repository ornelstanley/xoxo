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

    <div class="row mb-2 mb-xl-3">
      <div class="col-auto mr-auto text-left mt-n1">
        <button class="btn btn-light bg-gray shadow-sm"><b>Trader:</b>&nbsp;Adam Grogon(#)</button>
      </div>

      <div class="col-auto ml-auto text-right mt-n1">

<button class="btn btn-light bg-white shadow-sm " id="day"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#changeTraderModal">
  <i class="align-middle mt-n1" data-feather="user-minus"></i> Change Trader
</button>
        <button class="btn btn-primary shadow-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#reportTraderModal"> 
<i class="align-middle mt-n1" data-feather="flag">Report Trader&nbsp;</i>
</button>
      </div>

    </div>
    
    <div class="row mt-3 mb-3">
      <div class="col-md-12 text-right">
      <h5>
        <b>Version: {{ $set->version }}</b></h5>
      </div></div>
    <div class="row">
      <div class="col-12 col-sm-6 col-xxl d-flex">
        <div class="card illustration flex-fill">
          <div class="card-body p-0 d-flex flex-fill">
            <div class="row no-gutters w-100">
              <div class="col-6">
                <div class="illustration-text p-3 m-1">
                  <h4 class="illustration-text">Welcome {{ Auth::user()->name}}</h4>
                  <p class="mb-0">This is announcement area</p>
                </div>
              </div>
              <div class="col-6 align-self-end text-right">
                <img src="dashboard/img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mb-3">
      <div class="col-12 col-sm-6 col-xxl d-flex text-right">
    <button class="btn btn-outline-success">
      Wallet Balance: $ {{ number_format(Auth::user()->balance,2,'.',',') }}</button> 
    </div></div>
    <div class="row">
      <div class="col-12 col-sm-6 col-xxl d-flex">
        <div class="card flex-fill">
          <div class="card-body py-4">
            <div class="media">
              <div class="media-body">
                <h3 class="mb-2">{{ Auth::user()->current_entry}}</h3>
                <p class="mb-2">Current Entry</p>
               
              </div>
              <div class="d-inline-block ml-3">
                <div class="stat">
                  <i class="align-middle text-success" data-feather="shopping-bag"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xxl d-flex">
        <div class="card flex-fill">
          <div class="card-body py-4">
            <div class="media">
              <div class="media-body">
                <h3 class="mb-2">$ {{ number_format(Auth::user()->entry_balance,2,'.',',') }}</h3>
                <p class="mb-2">Current Deposit In Entry</p>
                
              </div>
              <div class="d-inline-block ml-3">
                <div class="stat">
                  <i class="align-middle text-danger" data-feather="dollar-sign"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xxl d-flex">
        <div class="card flex-fill">
          <div class="card-body py-4">
            <div class="media">
              <div class="media-body">
                <h3 class="mb-2">$ {{ Auth::user()->pending_deposit }}</h3>
                <p class="mb-2">Pending Deposit</p>
               
              </div>
              <div class="d-inline-block ml-3">
                <div class="stat">
                  <i class="align-middle text-info" data-feather="dollar-sign"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-12 col-sm-6 col-xxl d-flex">
        <div class="card flex-fill">
          <div class="card-body py-4">
            <div class="media">
              <div class="media-body">
                <h3 class="mb-2">$ {{ Auth::user()->profit }}</h3>
                <p class="mb-2">Profit</p>
               
              </div>
              <div class="d-inline-block ml-3">
                <div class="stat">
                  <i class="align-middle text-info" data-feather="dollar-sign"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</main>
@endsection
@section('footer')
<div class="modal fade" id="changeTraderModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Trader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      </div>
      <div class="modal-body m-3">
        <form method="post" action="{{ route('change.trader')}}">
          <div class="form-group">
            <label class="form-label">Trader ID</label>
            <input type="text" class="form-control" placeholder="Trader ID" name="trader_id"></textarea>
            </div>
          <div class="form-group">
          <label class="form-label">Reason</label>
          <textarea class="form-control" rows="2" placeholder="Reason" name="reason"></textarea>
          </div>
          <button class="btn btn-success btn-block">Change Trader</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="reportTraderModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Report Trader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      </div>
      <div class="modal-body m-3">
        <div class="alert alert-danger">You are about to flag this trader, please fill in a reason below as to why you wish to carry \
          out this action</div>
        <form method="post" action="{{ route('report.trader')}}">
          <div class="form-group">
          <label class="form-label">Reason</label>
          <textarea class="form-control" rows="2" placeholder="Reason" name="reason"></textarea>
          </div>
          <button class="btn btn-danger btn-block">Report</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
