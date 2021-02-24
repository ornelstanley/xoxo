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
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin({{ Auth::user()->name}})</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>        
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.users') }}" aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.traders') }}" aria-expanded="false"><i
                                    class="fa fa-handshake-o"></i><span class="hide-menu">Traders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.trades') }}" aria-expanded="false"><i
                                    class="fa fa-money"></i><span class="hide-menu">Trades & Withdrawals</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.deposits') }}" aria-expanded="false"><i
                                    class="fa fa-bitcoin"></i><span class="hide-menu">Deposits</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.settings') }}" aria-expanded="false"><i
                                    class="fa fa-gear"></i><span class="hide-menu">Settings</span></a>
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