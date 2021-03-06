{{--
    Main File for all admin files(Extended by all admin views)
--}}

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="yellow">
    <title>@yield('title') | Admin</title>

    <!-- jQuery 2.2.3 -->
    <script src="{{ URL::asset('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin-style.css') }}"
@yield('stylesheets')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini fixed">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('admin') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>M</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Maha Millet</b> Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!--Right Navigation bar-->
                    <!-- Logout Form-->
                    <form action="/logout" method="post" id="logout-form">
                        {{ csrf_field() }}
                    </form>

                    @yield('options')

                    <li style="border-left:1px solid #db6e20">
                        <a href="">{{ Sentinel::getUser()->first_name }}</a>
                    </li>

                    <li>
                        <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <i class="fa fa-code" style="font-size:40px; color:#fff;"></i>
                </div>
                <div class="pull-left info">
                    <p>{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Category Manager</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>Category Name</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Category Status</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Sub-Category Manager</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>jewellery Manager</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Thumbnails Manager</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Customer Manager</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>Edit/View Customers</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Download Excel</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Manage Orders</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-rebel"></i>
                        <span>Reports</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>Total Sales</a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i>Total Orders
                                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    <small class="label pull-right bg-green"></small>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-circle-o"></i>By Category</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i>By Date</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i>
                                Stock
                                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-circle-o"></i>All</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i>By Category</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Low on Stock</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        @yield('content')

        <!-- jQuery 2.2.3 -->
            <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>abel">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                    <div class="knob-label">In-Store</div>
                    </div>
                    <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->

                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                    <i class="fa fa-calendar"></i>

                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                <li><a href="#">Clear events</a></li>
                <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                    </div>
                    <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                    <div class="row">
                    <div class="col-sm-6">
                    <!-- Progress bars -->
                    <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                <small class="pull-right">90%</small>
                    </div>
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                    </div>

                    <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                <small class="pull-right">70%</small>
                    </div>
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                    <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                <small class="pull-right">60%</small>
                    </div>
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                    </div>

                    <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                <small class="pull-right">40%</small>
                    </div>
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                    </div>
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                    </div>
                    <!-- /.box -->

                    </section>
                    <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->

                    </section>
                    <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->
                    <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.11
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Create the tabs -->
                    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                    <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                    <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
                </div>
                </a>
                </li>
                <li>
                <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-user bg-yellow"></i>

                    <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
                </div>
                </a>
                </li>
                <li>
                <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                    <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
                </div>
                </a>
                </li>
                <li>
                <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                    <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
                </div>
                </a>
                </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                    Custom Template Design
                <span class="label label-danger pull-right">70%</span>
                    </h4>

                    <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                    </a>
                    </li>
                    <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                    Update Resume
                <span class="label label-success pull-right">95%</span>
                    </h4>

                    <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                    </div>
                    </a>
                    </li>
                    <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                    Laravel Integration
                <span class="label label-warning pull-right">50%</span>
                    </h4>

                    <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                    </div>
                    </a>
                    </li>
                    <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                    Back End Framework
                <span class="label label-primary pull-right">68%</span>
                    </h4>

                    <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                    </div>
                    </a>
                    </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Report panel usage
                <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                Some information about this general settings option
                </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                Other sets of options are available
                </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                Allow the user to show his name in blog posts
                </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Show me as online
                <input type="checkbox" class="pull-right" checked>
                </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Turn off notifications
                <input type="checkbox" class="pull-right">
                    </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                    </div>
                    <!-- /.form-group -->
                    </form>
                    </div>
                    <!-- /.tab-pane -->
                    </div>
                    </aside>
                    <!-- /.control-sidebar -->
                    <!-- Add the sidebar's background. This div must be placed
                         immediately after the control sidebar -->
                    <div class="control-sidebar-bg"></div>
                    </div>
                    <!-- ./wrapper -->

                    <!-- jQuery UI 1.11.4 -->
                    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 3.3.6 -->
            <script src="{{ URL::asset('AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- Morris.js charts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="{{ URL::asset('AdminLTE/plugins/morris/morris.min.js') }}"></script>
            <!-- Sparkline -->
            <script src="{{ URL::asset('AdminLTE/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
            <!-- jvectormap -->
            <script src="{{ URL::asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
            <script src="{{ URL::asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{ URL::asset('AdminLTE/plugins/knob/jquery.knob.js') }}"></script>
            <!-- daterangepicker -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
            <script src="{{ URL::asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
            <!-- datepicker -->
            <script src="{{ URL::asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="{{ URL::asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
            <!-- Slimscroll -->
            <script src="{{ URL::asset('AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
            <!-- FastClick -->
            <script src="{{ URL::asset('AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ URL::asset('AdminLTE/dist/js/app.min.js') }}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{ URL::asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ URL::asset('AdminLTE/dist/js/demo.js') }}"></script>
@yield('scripts')
</body>
</html>


