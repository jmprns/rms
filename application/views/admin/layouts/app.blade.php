
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>RMS - Rental Management System</title>

        @section('css-top')
        @show

        <!-- App css -->
        <link href="{{asset_url()}}css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{asset_url()}}css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset_url()}}plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        @section('css-bot')
        @show

        <script src="{{asset_url()}}js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <a href="index.html" class="logo">
                            Rental Management System
                        </a>
                        <!-- Image Logo -->
                        <!--<a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="" height="30">
                        </a>-->

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                           
                          
                            <li class="dropdown navbar-c-items">
                                 <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li class="text-center">
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown navbar-c-items">
                                <a href="javascript:void(0);" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{upload_url()}}users/default.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, John</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>

                            </li>

                            <li class="navbar-c-item">
                                <a href="#" class="right-menu-item">
                                    <i class="mdi mdi-logout"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="{{base_url()}}admin/dashboard"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{base_url()}}admin/room"><i class="mdi mdi-home-variant"></i>Rooms</a>
                            </li>
                            <li>
                                <a href="{{base_url()}}admin/tenant"><i class="mdi mdi-account-box"></i>Tenants</a>
                            </li>
                            <li>
                                <a href="{{base_url()}}admin/settings"><i class="mdi mdi-settings"></i>Settings</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                @section('page-bread')
                                @show
                            </div>
                            <h4 class="page-title">@yield('page-title')</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                @section('content')
                @show


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                2020 - DEVELOPED BY: JMPRNS
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- jQuery  -->
        <script src="{{asset_url()}}js/jquery.min.js"></script>
        <script src="{{asset_url()}}js/bootstrap.min.js"></script>
        <script src="{{asset_url()}}js/detect.js"></script>
        <script src="{{asset_url()}}js/fastclick.js"></script>
        <script src="{{asset_url()}}js/jquery.blockUI.js"></script>
        <script src="{{asset_url()}}js/waves.js"></script>
        <script src="{{asset_url()}}js/jquery.slimscroll.js"></script>
        <script src="{{asset_url()}}js/jquery.scrollTo.min.js"></script>
        <script src="{{asset_url()}}plugins/switchery/switchery.min.js"></script>

        @section('js-top')
        @show

        <!-- App js -->
        <script src="{{asset_url()}}js/jquery.core.js"></script>
        <script src="{{asset_url()}}js/jquery.app.js"></script>

        @section('js-bot')
        @show

    </body>
</html>