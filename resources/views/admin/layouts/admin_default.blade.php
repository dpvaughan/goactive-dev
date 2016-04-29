<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GoActive Administration</title>

    @include('admin.includes.admin_header')

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('admin.includes.admin_top_nav')

        <!-- Left side column. contains the logo and sidebar -->
              <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                  <!-- Sidebar user panel -->
                  <div class="user-panel">
                    <div class="pull-left image">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <!--<div class="pull-left info">
                      <p>Alexander Pierce</p>
                      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>-->
                  </div>
                  <!-- search form -->
                  <!--<form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>-->
                  <!-- /.search form -->
                  <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                      <a href="#">
                        <i class="fa fa-dashboard"></i><span>Activities</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li class="active"><a href="activity"><i class="fa fa-circle-o"></i> All Activities</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Students</span>
                        <span class="label label-primary pull-right">4</span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Students</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Add Students</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Schools</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> All Schools</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Add School</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Messages</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> All Messages</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Send Message</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>News</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> All News</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Snd News</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-table"></i>
                        <span>Statistics</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> View Statistics</a></li>
                      </ul>
                    </li>

                  </ul>
                </section>
                <!-- /.sidebar -->
              </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @yield('content')

</div>


  <!--@include('includes.footer') -->

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

  <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

</div>

</body>
</html>
