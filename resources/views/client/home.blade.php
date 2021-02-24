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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Welcome to FXCM MANAGED FUNDS</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{ route('deposit') }}" class="btn waves-effect waves-light btn btn-info pull-right "> Fund Account</a>
&nbsp;&nbsp;<a href="{{ route('trader') }}" class="btn waves-effect waves-light btn btn-outline-danger pull-right "> Statistics of your trader</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body" style="min-height:500px"><!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                  <div class="tradingview-widget-container__widget"></div>
                                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>
                                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                  {
                                  "width": "100%",
                                  "height": "500",
                                  "symbolsGroups": [
                                    {
                                      "name": "Indices",
                                      "originalName": "Indices",
                                      "symbols": [
                                        {
                                          "name": "FOREXCOM:SPXUSD",
                                          "displayName": "S&P 500"
                                        },
                                        {
                                          "name": "FOREXCOM:NSXUSD",
                                          "displayName": "Nasdaq 100"
                                        },
                                        {
                                          "name": "FOREXCOM:DJI",
                                          "displayName": "Dow 30"
                                        },
                                        {
                                          "name": "INDEX:NKY",
                                          "displayName": "Nikkei 225"
                                        },
                                        {
                                          "name": "INDEX:DEU30",
                                          "displayName": "DAX Index"
                                        },
                                        {
                                          "name": "FOREXCOM:UKXGBP",
                                          "displayName": "FTSE 100"
                                        }
                                      ]
                                    },
                                    {
                                      "name": "Commodities",
                                      "originalName": "Commodities",
                                      "symbols": [
                                        {
                                          "name": "CME_MINI:ES1!",
                                          "displayName": "S&P 500"
                                        },
                                        {
                                          "name": "CME:6E1!",
                                          "displayName": "Euro"
                                        },
                                        {
                                          "name": "COMEX:GC1!",
                                          "displayName": "Gold"
                                        },
                                        {
                                          "name": "NYMEX:CL1!",
                                          "displayName": "Crude Oil"
                                        },
                                        {
                                          "name": "NYMEX:NG1!",
                                          "displayName": "Natural Gas"
                                        },
                                        {
                                          "name": "CBOT:ZC1!",
                                          "displayName": "Corn"
                                        }
                                      ]
                                    },
                                    {
                                      "name": "Bonds",
                                      "originalName": "Bonds",
                                      "symbols": [
                                        {
                                          "name": "CME:GE1!",
                                          "displayName": "Eurodollar"
                                        },
                                        {
                                          "name": "CBOT:ZB1!",
                                          "displayName": "T-Bond"
                                        },
                                        {
                                          "name": "CBOT:UB1!",
                                          "displayName": "Ultra T-Bond"
                                        },
                                        {
                                          "name": "EUREX:FGBL1!",
                                          "displayName": "Euro Bund"
                                        },
                                        {
                                          "name": "EUREX:FBTP1!",
                                          "displayName": "Euro BTP"
                                        },
                                        {
                                          "name": "EUREX:FGBM1!",
                                          "displayName": "Euro BOBL"
                                        }
                                      ]
                                    },
                                    {
                                      "name": "Forex",
                                      "originalName": "Forex",
                                      "symbols": [
                                        {
                                          "name": "FX:EURUSD"
                                        },
                                        {
                                          "name": "FX:GBPUSD"
                                        },
                                        {
                                          "name": "FX:USDJPY"
                                        },
                                        {
                                          "name": "FX:USDCHF"
                                        },
                                        {
                                          "name": "FX:AUDUSD"
                                        },
                                        {
                                          "name": "FX:USDCAD"
                                        }
                                      ]
                                    }
                                  ],
                                  "showSymbolLogo": true,
                                  "colorTheme": "light",
                                  "isTransparent": false,
                                  "locale": "en"
                                }
                                  </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body" style="min-height:500px">
                                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
    {
    "colorTheme": "light",
    "isTransparent": false,
    "width": "100%",
    "height": "500",
    "locale": "en",
    "importanceFilter": "-1,0,1"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
