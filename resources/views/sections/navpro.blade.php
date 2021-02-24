        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                       
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">${{number_format(Auth::user()->balance,2,'.',',')}} <span
                                    class="hidden-md-down">{{ Auth::user()->name}} &nbsp;</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark"  aria-expanded="false"><i
                                    class="fa fa-desktop"></i><span class="hide-menu">Trading Platforms</span></a>
                                    <ul>
                                        <li ><a class="waves-effect waves-dark" href="{{ route('platform') }}" >MetaTrader</a></li>
                                        <li ><a class="waves-effect waves-dark" href="{{ route('platform') }}">MetaTrader 4</a></li>
                                        <li ><a class="waves-effect waves-dark" href="{{ route('platform') }}">Ninja</a></li>
                                    </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('platform') }}" aria-expanded="false"><i
                                    class="fa fa-signal"></i><span class="hide-menu">Premium Signals</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('deposit') }}" aria-expanded="false"><i
                                    class="fa fa-money"></i><span class="hide-menu">Deposit</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('withdraw') }}" aria-expanded="false"><i
                                    class="fa fa-bank"></i><span class="hide-menu">Withdraw</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('profile') }}" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="mailto:{{ $set->email }}" aria-expanded="false"><i
                            class="fa fa-support"></i><span class="hide-menu">Support</span></a>
                         </li>
                         <li> <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false"><i
                            class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a>
                </li>
                    </ul>
                   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->