<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Dashboard - Ace Admin</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{asset('acemaster/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('acemaster/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
	<link rel="stylesheet" href="{{asset('acemaster/assets/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
	<link rel="stylesheet" href="{{asset('acemaster/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
	<link rel="stylesheet" href="{{asset('acemaster/assets/css/ace-skins.min.css')}}" />
	<link rel="stylesheet" href="{{asset('acemaster/assets/css/ace-rtl.min.css')}}" />
		
	</head>
	<body class="no-skin">
	<div id="navbar" class="navbar navbar-default          ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Makan Yuk Sepuasnya
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
								<!-- isi content -->
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

					

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{asset('acemaster/assets/images/avatars/user.jpg')}}" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									{{Auth::user()->name}}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										 <a class="dropdown-item" href="{{ route('logout') }}"
                                       		onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        	{{ __('Logout') }}
                                    	</a>
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           			@csrf
                  					</form>
								</li>
							</ul>
						</li>
					</ul>
					 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- home -->
        <li id="menu_home"><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>

        <!-- master -->
        @if (Auth::user()->role_type == "A")
          <li class="treeview" id="menu_master">
            <a href="#">
              <i class="fa fa-database"></i> <span>Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="submenu_users"><a href="{{url('users')}}"><i class="fa fa-users"></i> Users</a></li>
              <li id="submenu_categories"><a href="{{url('categories')}}"><i class="fa fa-cubes"></i> Add Categories</a></li>
              <li id="submenu_items"><a href="{{url('items')}}"><i class="fa fa-inbox"></i> Add Items</a></li>
            </ul>
          </li>
        @endif
    </section>
    <!-- /.sidebar -->
  </aside>
				</div>
			</div><!-- /.navbar-container -->
		</div>
	

<script src="{{asset('acemaster/assets/js/ace-extra.min.js')}}"></script>
<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('acemaster/assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
<script src="{{asset('acemaster/assets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/jquery.sparkline.index.min.js')}}"></script>
		<script src="{{asset('acemaster/assets/js/jquery.flot.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/jquery.flot.resize.min.js')}}"></script>

		<!-- ace scripts -->
<script src="{{asset('acemaster/assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset('acemaster/assets/js/ace.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/js/adminlte.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- Sparkline -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.js"></script>
<!-- SlimScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

</body>
</html>
