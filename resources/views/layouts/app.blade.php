<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
      <meta content="Coderthemes" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!--Footable-->
      <link href="plugins/footable/css/footable.core.css" rel="stylesheet">
      <!-- App css -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
      <script src="assets/js/modernizr.min.js"></script>
   </head>
   <body>
    <div id="app">
        <!-- Begin page -->
        <div id="wrapper">
            {{-- <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
               <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 780px;">
                  <div class="slimscroll-menu" id="remove-scroll" style="overflow: hidden; width: auto; height: 780px;">
                     <!-- LOGO -->
                     <div class="topbar-left">
                        <a href="index.html" class="logo">
                        <span>
                        <img src="{{asset('/assets/images/logo.png') }}" alt="" height="22">
                        </span>
                        <i>
                        <img src="{{asset('/assets/images/logo_sm.png') }}" alt="" height="28">
                        </i>
                        </a>
                     </div>
                     <!-- User box -->
                     <div class="user-box">
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                     </div>
                     <!--- Sidemenu -->
                     <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                           <!--<li class="menu-title">Navigation</li>-->
                           <li>
                              <a href="index.html" aria-expanded="false">
                              <i class="fi-air-play"></i> <span>Acceuil</span>
                              </a>
                           </li>
                           <li class="active">
                              <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span> Proprietaire </span> <span class="menu-arrow"></span></a>
                              <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                 <li><a href="proprietaire/liste.html">Nouveau proprietaire</a></li>
                                 <li><a href="proprietaire/maj.html">Liste proprietaire</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <!-- Sidebar -->
                     <div class="clearfix"></div>
                  </div>
                  <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 780px;"></div>
                  <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
               </div>
               <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End --> --}}
            @include('layouts.left_side_menu')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
               <!-- Top Bar Start -->
               {{-- <div class="topbar">
                  <nav class="navbar-custom">
                     <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="hide-phone app-search">
                           <form>
                              <input type="text" placeholder="Search..." class="form-control">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </form>
                        </li>
                        <li class="dropdown notification-list">
                               <a id="fullscreen" class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" role="button"  aria-haspopup="false" aria-expanded="false">
                                   <i class="fi-expand noti-icon"></i>
                               </a>
                           </li>
                        <li class="dropdown notification-list">
                           <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           <img src="{{asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown" x-placement="bottom-end" style="position: absolute; transform: translate3d(-32px, 70px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <!-- item-->
                              <div class="dropdown-item noti-title">
                                 <h6 class="text-overflow m-0">Welcome !</h6>
                              </div>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="fi-head"></i> <span>Dashboard</span>
                              </a>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="fi-cog"></i> <span>Paramétres</span>
                              </a>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="fi-power"></i> <span>Logout</span>
                              </a>
                           </div>
                        </li>
                     </ul>
                     <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                           <button class="button-menu-mobile open-left">
                           <i class="dripicons-menu"></i>
                           </button>
                        </li>
                        <li>
                           <div class="page-title-box">
                              <h4 class="page-title">Acceuil </h4>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item active">Bienvenue sur votre espace E-Syndic !</li>
                              </ol>
                           </div>
                        </li>
                     </ul>
                  </nav>
               </div> --}}
               @include('layouts.top_bar_start')
            <!-- Top Bar End -->
            <!-- Start Page content -->
            <div class="content">
                <main class="py-4">
                    @yield('content')
                </main>
               
               

           
            <!-- content -->
            <footer class="footer text-right">
               2018 © Powered by <a href="http://marocgeek.com" target="_blank">MarocGeek</a>
            </footer>
         </div>
         <!-- ============================================================== -->
         <!-- End Right content here -->
         <!-- ============================================================== -->
      </div>
      <!-- END wrapper -->
      <!-- jQuery  -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/metisMenu.min.js"></script>
      <script src="assets/js/waves.js"></script>
      <script src="assets/js/jquery.slimscroll.js"></script>
      <!-- Flot chart -->
      <script src="plugins/flot-chart/jquery.flot.min.js"></script>
      <script src="plugins/flot-chart/jquery.flot.time.js"></script>
      <script src="plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
      <script src="plugins/flot-chart/jquery.flot.resize.js"></script>
      <script src="plugins/flot-chart/jquery.flot.pie.js"></script>
      <script src="plugins/flot-chart/jquery.flot.crosshair.js"></script>
      <script src="plugins/flot-chart/curvedLines.js"></script>
      <script src="plugins/flot-chart/jquery.flot.axislabels.js"></script>
      <!-- KNOB JS -->
      <!--[if IE]>
      <script type="text/javascript" src="plugins/jquery-knob/excanvas.js"></script>
      <![endif]-->
      <script src="plugins/jquery-knob/jquery.knob.js"></script>
      <!-- App js -->
      <script src="assets/js/jquery.core.js"></script>
      <script src="assets/js/jquery.app.js"></script>
      </div>
   </body>
</html>